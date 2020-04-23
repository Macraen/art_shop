<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>



    <?= $form->field($model, 'date')->widget(\kartik\date\DatePicker::className(),['name' => 'check_issue_date',
        'value' => date('d-m-Y', strtotime('+2 days')),
        'language' => 'uk-UK',
        'options' => ['placeholder' => 'Оберіть Вашу дату народження ...'],
        'pluginOptions' => [
            'format' => 'dd-mm-yyyy',
            'language' => 'ru-RU',
            'todayHighlight' => true
        ]])->label('Дата народження') ?>

<!--    --><?//= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'viewed')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'user_id')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'status')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
