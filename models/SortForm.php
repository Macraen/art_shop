<?php


namespace app\models;

use yii\base\Model;

class SortForm extends Model
{
    public $priceFrom;
    public $priceTo;
    public $category;
    public $sort;



    public function rules()
     {
         return[
        [['priceFrom', 'priceTo', 'category', 'sort'], 'trim'],
         ];
    }

    public function getAssociatedArray()
    {
        return $this->sort;
    }
}