<?php

namespace app\controllers;
use yii\web\Controller;


class ChatController extends Controller
{
    public function actionSendChat() {
        $message = $_POST['message'];
        if ($message) {
            $model = new \sintret\chat\models\Chat;
            $model->message = $message;
            if ($model->save()) {
                echo \sintret\chat\ChatRoom::data();
            } else {
                print_r($model->getErrors());
                exit(0);
            }
        }
    }


}