<?php


namespace app\models;


use lavrentiev\widgets\toastr\Notification;
use Yii;
use yii\base\Model;
use yii\db\Query;
use yii\web\IdentityInterface;

class MessageForm extends Model
{

    public $message;

    public function rules()
    {
        return [
            [['message'], 'required'],
            [['message'], 'string', 'length' => [2, 250]]
        ];
    }
    public function attributeLabels()
    {
        return [
            'message' => 'Message',
        ];
    }

    public function sendMessage($reciveID)
    {
        if ($reciveID == Yii::$app->user->identity->getId())
        {
            Notification::widget([
                'type' => 'info',
                'message' => 'Ви не можете відправити повідомлення самому собі!'
            ]);
        }

        $ID = User::findOne(['id'=>$reciveID]);




        if (!$ID){
            Notification::widget([
                'type' => 'error',
                'message' => 'Користувача не знайдено!'
            ]);
        };

        $myId = Yii::$app->user->identity->getId();



        $Row = (new Query())
            ->select(['id'])
            ->from('dialog')
            ->where(['recive' => $ID->id])
            ->andWhere(['send' => $myId])
            ->orWhere(['recive' => $myId])
            ->andWhere(['send' => $ID->id])
            ->limit(1)
            ->all();



        if ($Row) {

            $DID = $Row;

            $dialog_update = (new Dialog)->actionUpdate($Row,0,$myId,$ID->id);
            $dialog_update->save();
        } else {

            $dialog_insert = (new Dialog)->actionInsert(0,$myId,$ID->id);
            $dialog_insert->save();


            $DID = Message::find()->orderBy('id DESC')->one();

        }

        $message_insert = (new Message)->actionInsert($DID,$myId,$this->message,date("Y-m-d H:i:s"));
         return $message_insert->save();

    }


}