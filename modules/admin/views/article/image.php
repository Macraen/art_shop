<?php

use app\models\Article;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">
<!--    <h1>Завантаження зображення</h1>-->
<!--    --><?php
//    Modal::begin([
//        'header' => '<h2>Hello world</h2>',
//        'toggleButton' => [
//            'label' => 'click me',
//            'tag' => 'button',
//            'class' => 'btn btn-success',
//        ],
//        'footer' => 'Низ окна',
//    ]);
//
//    echo 'Ello';
//
//    Modal::end()
//    ?>

    <?php $form = ActiveForm::begin(); ?>

    <h3>Завантаження зображення</h3>
    <?= $form->field($model, 'image')->fileInput(['maxlength' => true])?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
