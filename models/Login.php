<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Url;

class Login extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;


    public function rules()
    {
        return [

            [['email','password'],'required','message' => "Це поле бов'язкове для заповнювання."],
            ['email','email','message' => "Введіть коректну адресу."],
            ['rememberMe', 'boolean'],
            ['password','validatePassword'] //собственная функция для валидации пароля
        ];
    }

    public function validatePassword($attribute,$params)
    {
        if(!$this->hasErrors()) // если нет ошибок в валидации
        {
            $user = $this->getUser(); // получаем пользователя для дальнейшего сравнения пароля

            if(!$user || !$user->validatePassword($this->password))
            {
                //если мы НЕ нашли в базе такого пользователя
                //или введенный пароль и пароль пользователя в базе НЕ равны ТО,
                $this->addError($attribute,'Пароль або ел.пошта введені невірно');
                //добавляем новую ошибку для атрибута password о том что пароль или имейл введены не верно
            }
        }
    }

    public function Login(){
        if($this->validate()){
            return Yii::$app->user->login($this->getUser(),3600*24*30);
        }
    }

    public function getUser()
    {
        return User::findOne(['email'=>$this->email]); // а получаем мы его по введенному имейлу
    }


}