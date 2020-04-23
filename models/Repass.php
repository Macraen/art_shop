<?php


namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Url;

class Repass extends Model
{
    public $email;
    public $token;

    public function rules()
    {
        return [

            [['email'],'required','message' => "Це поле бов'язкове для заповнювання."],
            ['email','email','message' => "Введіть коректну адресу."],
            ['email','validateEmail'],
        ];
    }

    public function validateEmail($attribute,$params)
    {
        if(!$this->hasErrors()) // если нет ошибок в валидации
        {
            $user = $this->getUserEmail(); // получаем пользователя для дальнейшего сравнения пароля

            if(!$user)
            {
                //если мы НЕ нашли в базе такого пользователя
                //или введенный пароль и пароль пользователя в базе НЕ равны ТО,
                $this->addError($attribute,'Ця пошта не зареєстрована!');
                //добавляем новую ошибку для атрибута password о том что пароль или имейл введены не верно
            }
        }
    }


    public function getUserEmail()
    {
        return User::findOne(['email'=>$this->email]); // а получаем мы его по введенному имейлу
    }

    public function sendToken(){
        $user = $this->getUserEmail();


        $sendingResult = Yii::$app->mailer->compose()
            ->setFrom(Yii::$app->params['adminEmail'])
            ->setTo($this->email)
            ->setSubject('Смена пароля')
            ->setHtmlBody('<table bgcolor="#ffffff" class="m_-6559625847427879627es-header-body" align="center" cellpadding="0" cellspacing="0" width="600" style="border-collapse:collapse;border-spacing:0px;background-color:#ffffff"> 
             <tbody><tr style="border-collapse:collapse"> 
              <td style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:40px;padding-right:40px;background-position:center bottom" align="left"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border-spacing:0px"> 
                 <tbody><tr style="border-collapse:collapse"> 
                  <td width="520" valign="top" align="center" style="padding:0;Margin:0"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="border-collapse:collapse;border-spacing:0px"> 
                     <tbody><tr style="border-collapse:collapse"> 
                      <td align="center" class="m_-6559625847427879627es-m-txt-c" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;font-family:arial,\'helvetica neue\',helvetica,sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#333333">Привіт,&nbsp;'.$user->firstname.'</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td class="m_-6559625847427879627es-m-txt-c" align="center" style="padding:0;Margin:0;padding-top:15px;padding-bottom:20px"><h3 style="Margin:0;line-height:24px;font-family:arial,\'helvetica neue\',helvetica,sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#010101">Для зміни паролю скопіюйте, код відтворення паролю та вставте його в поле "Код підтвердження" на сайті! </h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:10px;padding-left:10px;padding-right:10px"><span class="m_-6559625847427879627es-button-border" style="border-style:solid;border-color:#2cb543;background:#2cb543;border-width:0px 0px 2px 0px;display:inline-block;border-radius:30px;width:auto"><a class="m_-6559625847427879627es-button" style="text-decoration:none;font-family:arial,\'helvetica neue\',helvetica,sans-serif;font-size:18px;color:#ffffff;border-style:solid;border-color:#31cb4b;border-width:10px 20px 10px 20px;display:inline-block;background:#31cb4b;border-radius:30px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center" >'.$user->token.'</a></span></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td class="m_-6559625847427879627es-m-txt-c" align="center" style="padding:0;Margin:0;padding-top:10px;padding-bottom:15px"><p style="Margin:0;font-size:14px;font-family:arial,\'helvetica neue\',helvetica,sans-serif;line-height:21px;color:#999999"><a href="http://auction-gallery.ga" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://auction-gallery.ga&amp;source=gmail&amp;ust=1585076604690000&amp;usg=AFQjCNGWlg0E_HpAuXuhFXyV3BrCEh8bkw">auction-gallery.ga</a></p></td> 
                     </tr> 
                   </tbody></table></td> 
                 </tr> 
               </tbody></table></td> 
             </tr> 
           </tbody></table>')
            ->send();

        return $sendingResult;
    }
    public function repass()
    {
        $user = $this->getUserEmail();
        $user->token = $this->token;
        return $user->save(); //вернет true или false
    }

}