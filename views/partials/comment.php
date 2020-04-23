<?php use yii\helpers\Url;
use yii\widgets\ActiveForm;

if(!empty($comments)): ?>

    <?php foreach ($comments as $comment):?>
<!--    <script type="text/javascript">-->
<!--        -->
<!--        $(function () {-->
<!--            $('#comment_f').submit(function(e){-->
<!--                e.preventDefault();-->
<!--                var data = $(this).serialize();-->
<!--                $.ajax({-->
<!--                    type: "POST",-->
<!--                    url: "comment_reload.php",-->
<!--                    data: data,-->
<!--                    success: function (result) {-->
<!--                        $('#comment').html(result);-->
<!--                    }-->
<!--                });-->
<!--            });-->
<!--        })-->
<!--        -->
<!---->
<!--    </script>-->
        <div class="bottom-comment" id="comment"><!--bottom comment-->
            <div class="comment-img">
                <img width="50" class="img-circle" src="<?= $comment->user->image; ?>" alt="">
            </div>

            <div class="comment-text">
                <?php if(Yii::$app->user->identity->isAdmin): ?>
                <a href="<?= Url::toRoute(['site/delete', 'id'=>$comment->id])?>" class="btn-danger btn pull-right">Видалити</a>
        <?endif;?>
                <h5><?= $comment->user->firstname.' '.$comment->user->surename;?></h5>

                <p class="comment-date">
                    <?= $comment->date;?>
                </p>


                <p class="para"><?= $comment->text; ?></p>
            </div>
        </div>
    <?php endforeach;?>

<?php endif; ?>

    <!-- end bottom comment-->


<?php if(!Yii::$app->user->isGuest):?>
    <div class="leave-comment" id="comment_f"><!--leave comment-->
        <h4>Leave a reply</h4>
        <?php if(Yii::$app->session->getFlash('comment')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('comment'); ?>
            </div>
        <?php endif;?>

        <?php $form= ActiveForm::begin([
            'action'=>['site/comment', 'id'=>$article->id],
            'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
        <div class="form-group">
            <div class="col-md-12">
                <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Write Message'])->label(false)?>
            </div>
        </div>
        <button type="submit" class="btn send-btn">Post Comment</button>
        <?php ActiveForm::end();?>
    </div><!--end leave comment-->
<?php endif;?>