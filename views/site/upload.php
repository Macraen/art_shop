<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="ru-RU">
<head>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="generator" content="2017.0.4.363"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <title>cabinet</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="uploads/upload.css"/>
    <link rel="stylesheet" type="text/css" href="uploads/site.css"/>
    <link rel="stylesheet" type="text/css" href="uploads/modal.css"/>



    <!-- JS includes -->
    <!--[if lt IE 9]>


    <![endif]-->

</head>
<body>
<?php $this->beginBody() ?>

<!--<script type="text/javascript">-->
<!--    jQuery('document').ready(function($) {-->
<!--        $('.upload').upload("enable");-->
<!---->
<!--    });-->
<!--</script>-->

<div class="upload"></div>
<div id="'res"></div>

<button id="myBtn">Open modal</button>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>mODAL OKNO</p>
    </div>
</div>


<?php $this->endBody() ?>
<script src="uploads/upload.js" type="text/javascript"></script>
<script src="uploads/core.js" type="text/javascript"></script>
<script src="uploads/modernizr.js?v=1.4.16-1" type="text/javascript"></script>
<script src="uploads/modal.js" type="text/javascript"></script>
</body>
</html>
<?php $this->endPage() ?>
