<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $surename
 * @property string|null $city
 * @property string|null $date
 * @property string|null $email
 * @property string|null $password
 * @property int|null $isAdmin
 * @property string|null $image
 * @property string|null $code
 * @property int|null $active
 * @property float|null $money
 *
 * @property Comment[] $comments
 */

class User extends ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isAdmin', 'active'], 'integer'],
            [['firstname', 'surename', 'city', 'date', 'email'], 'string', 'max' => 100],
            [['password', 'image', 'code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'surename' => 'Surename',
            'city' => 'City',
            'date' => 'Date',
            'email' => 'Email',
            'password' => 'Password',
            'isAdmin' => 'Is Admin',
            'image' => 'Image',
            'code' => 'Code',
            'active' => 'Active',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['user_id' => 'id']);
    }
    public function setPassword($password)
    {
        $this->password = sha1($password);
    }

    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }

    //=============================================
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImage(){
        return $this->image;
    }

    public  function saveImage($filename){
        $this->image= $filename;
        return $this->save(false);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    public function getAuthKey()
    {

    }

    public function validateAuthKey($authKey)
    {

    }

}
