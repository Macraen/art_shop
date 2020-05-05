<?php

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use app\models\Changepass;
use app\models\Chat;
use app\models\Comment;
use app\models\CommentForm;
use app\models\Dialog;
use app\models\ImageUpload;
use app\models\MessageForm;
use app\models\Repass;
use app\models\SortForm;
use app\models\User;
use lavrentiev\widgets\toastr\Notification;
use sintret\chat\ChatRoom;
use Yii;
use yii\data\Pagination;
use yii\db\Query;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $query = Article::find()->orderBy('date ASC')->where(['status' => 1]);
        $countQuery = $query->count();
        $pagination = new Pagination(['totalCount' => $countQuery, 'pageSize'=>5]);
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $popular = Article::find()->orderBy('viewed desc')->where(['status' => 1])->limit(5)->all();
        $recent = Article::find()->orderBy('date ASC')->limit(4)->all();
        $categories = Category::find()->all();

        $sort = new SortForm();
        if ($sort->load(Yii::$app->request->post())&& $sort->validate()){
//            print_r($sort);
            $priceFrom = 0;
            $priceTo = 99999;
            $category = 989;

            if(isset($sort->priceFrom)&&isset($sort->priceTo)){
                $priceFrom = $sort->priceFrom;
                $priceTo = $sort->priceTo;
            }

            if(isset($sort->category)&&!empty($sort->category)){
                $category = $sort->category;
            }


            if(isset($sort->sort)){
                switch ($sort->sort){
                    case 0:
                        $sortT = 'date ASC';
                        $query = $this->sortedArticles($sortT, $priceFrom, $priceTo,$category);
                        break;
                    case 1:
                        $sortT = 'viewed desc';
                        $query = $this->sortedArticles($sortT, $priceFrom, $priceTo,$category);
                        break;
                    case 2:
                        $sortT = 'price asc';
                        $query = $this->sortedArticles($sortT, $priceFrom, $priceTo,$category);
                        break;
                    case 3:
                        $sortT = 'price desc';
                        $query = $this->sortedArticles($sortT, $priceFrom, $priceTo,$category);
                        break;
                }
            }
        }

        $countQuery = $query->count();
        $pagination = new Pagination(['totalCount' => $countQuery, 'pageSize'=>5]);
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'articles'=>$articles,
            'pagination'=>$pagination,
            'popular' => $popular,
            'recent' => $recent,
            'categories'=> $categories,
            'sort'=> $sort,
        ]);
    }

    public function sortedArticles($sortT, $priceFrom, $priceTo,$category){
        if($category==989){
            return Article::find()->orderBy($sortT)->where(['status' => 1])->andWhere(['>','price', $priceFrom-1])->andWhere(['<','price', $priceTo+1]);
        } else{
            return Article::find()->orderBy($sortT)->where(['status' => 1])->andWhere(['>','price', $priceFrom-1])->andWhere(['<','price', $priceTo+1])->andWhere(['category_id' =>$category]);
        }
    }

    public function actionView($id){
        $article = Article::findOne($id);
        $popular = Article::find()->orderBy('viewed desc')->limit(5)->all();
        $recent = Article::find()->orderBy('date desc')->limit(4)->all();
        $categories = Category::find()->all();
        $comments = $article->comments;
        $user = User::className();
        $commentForm = new CommentForm();
//        $message = new MessageForm();

        $article->viewedCounter();


        return $this->render('single', [
            'article'=>$article,
            'popular' => $popular,
            'recent' => $recent,
            'categories'=> $categories,
            'comments'=> $comments,
            'commentForm'=>$commentForm,
//            'message'=>$message,
        ]);
    }



    public function actionCategory($id){
        $query = Article::find()->where(['category_id' => $id]);
        $countQuery = $query->count();
        $pagination = new Pagination(['totalCount' => $countQuery, 'pageSize'=>5]);
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $popular = Article::find()->orderBy('viewed desc')->limit(5)->all();
        $recent = Article::find()->orderBy('date desc')->limit(4)->all();
        $categories = Category::find()->all();

        return $this->render('category', [
            'articles'=>$articles,
            'pagination'=>$pagination,
            'popular' => $popular,
            'recent' => $recent,
            'categories'=> $categories,
        ]);
    }

    public function actionError(){
        return $this->render('error');
    }


    public function actionLogout()
    {
        if(!Yii::$app->user->isGuest)
        {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }


    public function actionSignup()
    {
        $model = new Signup();
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            $model->code = Yii::$app->getSecurity()->generateRandomString(10);
            if($model->signup()){
                $model->sendConfirmationLink();
                //Yii::$app->session->setFlash('success', " Відправлено посилання для підтвердження Вашої почти.");
                Notification::widget([
                    'type' => 'info',
                    'message' => 'Посилання для підтвердження відправлено вам на почту'
                ]);
                return $this->redirect(['site/login']);
            }
        }

        return $this->render('signup',['model'=>$model]);
    }

    public function actionConfirmemail()
    {
        // Если пользователь авторизован, то возврощаем на домашнюю страницу
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        // разбираем ссылку
        $code = htmlspecialchars(Yii::$app->request->get('code'));
        $email = htmlspecialchars(Yii::$app->request->get('email'));

        // Ищим пользователя с таким E-mail и code
        $model = User::find()->where(['email' => $email, 'code' => $code])->one();
        // Если нашли
        if ($model->id)
        {
            $model->code = '';
            $model->active = Signup::ACTIVE_USER;
            $model->save();
            //Yii::$app->session->setFlash('success', "Ваш E-mail потверждён.");
            Notification::widget([
                'type' => 'success',
                'message' => 'Ваша почтова скринька успішно підтверджена!'
            ]);
            return $this->redirect('/site/login');
        }
        else
        {
            return $this->goHome();
        }

    }


    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $login_model = new Login();

        if( Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->goHome();
            }
        }

        return $this->render('login',['login_model'=>$login_model]);
    }

    public function actionRepass()
    {
        $res_model = new Repass();

        if( Yii::$app->request->post('Repass'))
        {
            $res_model->attributes = Yii::$app->request->post('Repass');
            $res_model->token = Yii::$app->getSecurity()->generateRandomString(10);

            if($res_model->validate())
            {
                if($res_model->repass()) {
                    $res_model->sendToken();
                    //Yii::$app->session->setFlash('success', " Код підтвердження висланный на ваш email.");
                    Notification::widget([
                        'type' => 'info',
                        'message' => 'Код для підтвердження відправлено на вашу почту!'
                    ]);
                    return $this->redirect(['/site/changepass']);
                }
            }
        }
        return $this->render('repass',['res_model'=>$res_model]);
    }

    public function actionChangepass()
    {
        $change_model = new Changepass();

        if( Yii::$app->request->post('Changepass'))
        {
            $change_model->attributes = Yii::$app->request->post('Changepass');

            if($change_model->changepass())
            {
                Notification::widget([
                    'type' => 'success',
                    'message' => 'Ваш пароль успішно змінено!'
                ]);
                return $this->redirect('/site/login');
            }
        }
        return $this->render('changepass',['change_model'=>$change_model]);
    }

    public function actionComment($id){
        $model = new CommentForm();
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id)){
                return $this->redirect(['site/view', 'id'=>$id]);
            }
        }
    }

    public function actionDelete($id){
        $comment = Comment::findOne($id);
        if($comment->delete()){
            return $this->redirect(Yii::$app->request->referrer);
        }
    }



    public function  actionMessage($reciveID){
        $model = new MessageForm();
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            if($model->sendMessage($reciveID)){
                return $this->redirect(Yii::$app->request->referrer);
            }
        }
//        (new \app\models\Chat)->sendMessage($article_author, $message);

    }

    public function  actionCabinet($id){
        $query = Article::find()->orderBy('date ASC')->where(['status' => 1])->andWhere(['user_id'=>Yii::$app->user->identity->id]);
        $countQuery = $query->count();
        $pagination = new Pagination(['totalCount' => $countQuery, 'pageSize'=>3]);
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

//        $query2 = Dialog::find()->where(['recive' or 'send' => $id]);
//        $countQuery2 = $query2->count();
//        $pagination2 = new Pagination(['totalCount' => $countQuery2, 'pageSize'=>3]);
//        $dialog = $query2->offset($pagination2->offset)
//            ->limit($pagination2->limit)
//            ->all();
        $mDialog = (new Query())
            ->select(['*'])
            ->from('dialog')
            ->where(['recive' => Yii::$app->user->identity->id])
            ->orWhere(['send' => Yii::$app->user->identity->id])
            ->limit(1)
            ->all();

        if($mDialog[0]['send']==Yii::$app->user->identity->id){
            $senderID=$mDialog[0]['recive'];
        } else{
            $senderID=$mDialog[0]['send'];
        }



        $message = (new Query())
            ->select(['*'])
            ->from('message')
            ->where(['did' => $mDialog[0]['id']])
            ->orderBy('date DESC')
            ->limit(1)
            ->all();
        $sender = User::findOne($senderID);


        $model = new ImageUpload;

        if(Yii::$app->request->isPost){
            $user = User::findOne(Yii::$app->user->identity->id);

            $file = UploadedFile::getInstance($model, 'image');

            if($user->saveImage($model->uploadFile($file, $user->image))){
                return $this->redirect(['cabinet', 'id'=>Yii::$app->user->identity->id]);;
            }
        }

        return $this->render('cabinet', [
            'articles'=>$articles,
            'pagination'=>$pagination,
            'mDialog'=>$mDialog,
            'message'=>$message,
            'sender'=>$sender,
            'model' => $model,
        ]);
    }


public function actionDialog($id, $mDialog){
        $sender = User::findOne($id);

        $messages = (new Query())
        ->select(['*'])
        ->from('message')
        ->where(['did' => $mDialog])
        ->orderBy('date DESC')
        ->all();

    $model = new MessageForm();
    if(Yii::$app->request->isPost){
        $model->load(Yii::$app->request->post());
        if($model->sendMessage($id)){
            return $this->redirect(Yii::$app->request->referrer);
        }
    }

    $statusZero = (new \app\models\Dialog)->actionUpdateStatus($mDialog);

    return $this->render('dialog', [
        'sender'=> $sender,
        'messages'=>$messages,
        'model' => $model,
    ]);
}

public function actionCreate(){
    $model = new Article();

    if ($model->load(Yii::$app->request->post()) && $model->saveArticle()) {
        return $this->redirect(['view', 'id' => $model->id]);
    }

        return $this->render('create', [
            'model' => $model,
        ]);
}

public function actionAuction(){
    return $this->render('auction');
}




}
