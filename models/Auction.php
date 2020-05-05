<?php


namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class Auction extends ActiveRecord
{
    public static function tableName()
    {
        return 'auction';
    }

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title', 'description', 'content', 'image'], 'string'],
            [['price'], 'integer'],
            //[['date'], 'date', 'format'=>'php:d-m-Y'],
            [['date'], 'default', 'value'=>date('d-m-Y')],
            [['status'], 'default', 'value'=>1],
            [['title'], 'string', 'max'=>255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'start_price' => 'Start_price',
            'content' => 'Content',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'user_id' => 'User ID',
            'status' => 'Status',
            'category_id' => 'Category ID',
            'time' => 'Time',
            'buyer_id' => 'Buyer_id',
            'slot_price' => 'Slot_price',
            'slot_id' => 'Slot_id'
        ];
    }


}