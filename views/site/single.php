<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use app\models\User;
use lavrentiev\widgets\toastr\Notification;
use sintret\chat\ChatRoom;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

PublicAsset::register($this);
$this->beginPage();
?>
<head>
    <meta charset="utf-8">
    <? $this->head() ?>
</head>

<!--main content start-->

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id])?>"><?=$article->category->title;?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>"><?=$article->title;?></a></h1>


                        </header>
                        <div class="entry-content">
                            <?=$article->content;?>
                        </div>



                        <div class="social-share">
							<span
                                    class="social-share-title pull-left text-capitalize">Від <?= $article->author->firstname.' '.$article->author->surename; ?>    <?= $article->date;?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <?php
                        $form= ActiveForm::begin([
                         'action'=>['site/message', 'reciveID'=>$article->author->id], 'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
                        <div class="form-group">
                            <div class="col-md-12">
                                <?=$form->field($message, 'message')->textarea(['class'=>'form-control','placeholder'=>'Write Message'])->label(false)?>
                            </div>
                        </div>
<!--                        <a href="--><?//= Url::toRoute(['site/message', 'article_author'=>$article->author->id, 'message'=>$mess])?><!--" class="btn-danger btn pull-right">Надістлати</a>-->
                        <button type="submit" class="btn send-btn">Post</button>
                        <?php ActiveForm::end();?>
                    </div>
                </article>





                <?= $this->render('/partials/comment', [
                        'article'=>$article,
                    'comments'=>$comments,
                    'commentForm'=>$commentForm,
                    'user'=>$user,
                ])?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Популярні картини</h3>
                        <?php foreach ($popular as $article):?>
                            <div class="popular-post">


                                <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">

                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="text-uppercase"><?= $article->title;?></a>
                                    <span class="p-date"><?= $article->date;?></span>

                                </div>
                            </div>
                        <?php endforeach;?>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">останні пости</h3>

                        <?php foreach ($recent as $article):?>
                            <div class="thumb-latest-posts">


                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">
                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="text-uppercase"><?= $article->title;?></a>
                                        <span class="p-date"><?= $article->date;?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Категорії</h3>
                        <ul>
                            <?php foreach ($categories as $category):?>
                                <li>
                                    <a href="<?=Url::toRoute(['site/category', 'id'=>$category->id]);?>"><?= $category->title;?></a>
                                    <span class="post-count pull-right"> (<?= $category->getArticles()->count();?>)</span>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->