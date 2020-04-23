<?php


namespace app\models;

use Yii;
use yii\base\Model;

class Changepass extends Model
{
    public $token;
    public $password;
    public $confpassword;

    public function rules()
    {
        return [

            [['token', 'password', 'confpassword'], 'required', 'message' => "Це поле бов'язкове для заповнювання."],
            ['token', 'validateToken'],
            ['password', 'string', 'min' => 6, 'max' => 30, 'message' => "Пароль повинен буди не менше 6-ти символів."],
            ['confpassword', 'compare', 'compareAttribute' => 'password', 'message' => "Паролі не вспівпадають."],
        ];
    }

    public function validateToken($attribute,$params)
    {
        if(!$this->hasErrors()) // если нет ошибок в валидации
        {
            $user = $this->getUserToken(); // получаем пользователя для дальнейшего сравнения пароля

            if(!$user)
            {
                //если мы НЕ нашли в базе такого пользователя
                //или введенный пароль и пароль пользователя в базе НЕ равны ТО,
                $this->addError($attribute,'Код підтвердження не вірний!');
                //добавляем новую ошибку для атрибута password о том что пароль или имейл введены не верно
            }
        }
    }

    public function getUserToken()
    {
        return User::findOne(['token' => $this->token]); // а получаем мы его по введенному имейлу
    }

    public function changepass()
    {
        if ($this->validate()){
            $user =  $this->getUserToken();
            $user->setPassword($this->password);
            $user->token = NULL;
            return $user->save(); //вернет true или false
        }

    }

}