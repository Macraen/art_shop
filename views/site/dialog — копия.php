<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php //header('refresh: 5'); ?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="ru-RU">
<head>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="generator" content="2017.0.4.363"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript">
        // Update the 'nojs'/'js' class on the html node
        // document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

        // Check that all required assets are uploaded and up-to-date
        if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musemenu.js", "jquery.watch.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.museresponsive.js", "require.js", "chat.css"], "outOfDate":[]};
    </script>

    <title>chat</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../../web/css/site_global.css?crc=443350757"/>
    <link rel="stylesheet" type="text/css" href="../../web/css/master_______-a.css?crc=4024626471"/>
    <link rel="stylesheet" type="text/css" href="../../web/css/chat.css?crc=4016595324" id="pagesheet"/>
    <!-- IE-only CSS -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="../../web/css/nomq_preview_master_______-a.css?crc=3818994432"/>
    <link rel="stylesheet" type="text/css" href="../../web/css/nomq_chat.css?crc=3870142757" id="nomq_pagesheet"/>
    <link rel="stylesheet" type="text/css" href="../../web/css/chat_my.css"/>
    <link rel="stylesheet" type="text/css" href="../uploads/modal.css"/>
    <![endif]-->
    <!-- JS includes -->
    <!--[if lt IE 9]>
    <script src=/../scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
    <![endif]-->
</head>
<body>

<div class="breakpoint active" id="bp_infinity" data-min-width="1141"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox" id="page"><!-- column -->
        <div class="browser_width colelem" id="u120395-bw">
            <div id="u120395"><!-- group -->
                <div class="clearfix" id="u120395_align_to_page">
                    <a class="nonblock nontext clip_frame grpelem shared_content" id="u32632" href="index.html" data-content-guid="u32632_content"><!-- image --><img class="block temp_no_img_src" id="u32632_img" data-orig-src="../dialog/images/art%20%d0%bf%d1%80%d0%be%d1%81%d1%82%d1%96%d1%80.png?crc=3989492883" alt="" width="153" height="46" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                    <nav class="MenuBar clearfix grpelem" id="menuu31643"><!-- horizontal box -->
                        <div class="MenuItemContainer clearfix grpelem" id="u31672"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u31673" href="index.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u31676-4"><!-- content --><p class="shared_content" data-content-guid="u31676-4_0_content">ГАЛЕРЕЯ</p></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem" id="u31644"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u31647" href="index.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u31648-4"><!-- content --><p class="shared_content" data-content-guid="u31648-4_0_content">АУКЦІОН</p></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem" id="u31665"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u31666" href="index.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u31667-4"><!-- content --><p class="shared_content" data-content-guid="u31667-4_0_content">FAQ</p></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem" id="u31651"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u31654" href="index.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u31657-4"><!-- content --><p class="shared_content" data-content-guid="u31657-4_0_content">КОНТАКТИ</p></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem" id="u31658"><!-- vertical box -->
                            <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u31659"><!-- horizontal box -->
                                <div class="MenuItemLabel NoWrap clearfix grpelem" id="u31662-4"><!-- content -->
                                    <p id="u31662-2" class="shared_content" data-content-guid="u31662-2_content">МІЙ ПРОФІЛЬ</p>
                                </div>
                                <div class="grpelem" id="u31660"><!-- content --></div>
                            </div>
                            <div class="SubMenu MenuLevel1 clearfix" id="u31663"><!-- vertical box -->
                                <div class="SubMenuView clearfix colelem" id="u31664"><!-- vertical box -->
                                    <div class="position_content" id="u31664_position_content">
                                        <div class="MenuItemContainer clearfix colelem" id="u89157"><!-- horizontal box -->
                                            <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u89159"><!-- horizontal box -->
                                                <div class="MenuItemLabel NoWrap clearfix grpelem" id="u89163-7"><!-- content -->
                                                    <p id="u89163-5" class="shared_content" data-content-guid="u89163-5_content">Баланс: <span id="u89163-2">300</span> <span id="u89163-4">₴</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem" id="u89249"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u89250" href="cabinet.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u89252-4"><!-- content --><p id="u89252-2" class="shared_content" data-content-guid="u89252-2_content">Особистий кабінет</p></div></a>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem" id="u89405"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u89408" href="cabinet.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u89411-4"><!-- content --><p id="u89411-2" class="shared_content" data-content-guid="u89411-2_content">Повідомлення</p></div></a>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem" id="u89552"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u89553" href="index.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u89555-4"><!-- content --><p id="u89555-2" class="shared_content" data-content-guid="u89555-2_content">Вийти</p></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem" id="u133497"><!-- column -->
            <div class="clearfix colelem shared_content" id="pu133500" data-content-guid="pu133500_content"><!-- group -->
                <div class="rounded-corners clip_frame grpelem" id="u133500"><!-- image -->
                    <img class="block temp_no_img_src" id="u133500_img" data-orig-src="<?="../../webroot/uploads/".$sender[image]?>" alt="" width="53" height="53" src="../dialog/images/blank.gif?crc=4208392903"/>
                </div>
                <div class="clearfix grpelem" id="u133507-4"><!-- content -->
                    <p id="u133507-2"><?=$sender[firstname]." ".$sender[surename]?></p>
                </div>
            </div>
            <div class="colelem shared_content" id="u133522" data-content-guid="u133522_content"><!-- simple frame --></div>

<!--<script type="text/javascript">-->
<!--    setInterval(function(){-->
<!--        $("#autoreload").load("http://art.shop/site/dialog/71?mDialog=3 #autoreload");-->
<!--    }, 3000);-->
<!--</script>-->

            <script type="text/javascript">
                var url = document.URL;
                var set = url + " #autoreload";

                setInterval(function(){
                    $("#autoreload").load(set);
                }, 3000);


                document.onkeyup = function (e) {
                    e = e || window.event;
                    if (e.keyCode === 13) {
                        alert("Вы нажали Enter!");
                    }
                    // Отменяем действие браузера
                    return false;
                }
            </script>

<div class="autoreload" id="autoreload">
            <?php $g=4;
            if($messages[0]!=NULL):
            $MS = 1;
            $g=0;
            endif;
            if($messages[1]!=NULL):
            $MS = 2;
            $g=1;
            endif;
            if($messages[2]!=NULL):
            $MS = 3;
            $g=2;
            endif;
            if($messages[3]!=NULL):
            $MS = 4;
            $g=3;
            endif;
            if($messages[4]!=NULL):
            $MS = 5;
            $g=4;
            endif;
            ?>
            <?php  for($i=0;$i<$MS;$i++):?>
            <div class="rounded-corners clearfix colelem shared_content" id="u150178" data-content-guid="u150178_content"><!-- column -->
                <div class="clearfix colelem" id="pu150181-4"><!-- group -->
                    <div class="clearfix grpele" id="u150181-4"><!-- content -->
                        <?php if($sender[id]==$messages[$g]['user']):?>
                        <p><?=$sender[firstname]?></p>
                        <?php else:?>
                        <p><?=Yii::$app->user->identity->firstname?></p>
                        <?php endif;?>
                    </div>
                    <div class="clearfix grpelem" id="u150184-4"><!-- content -->
                        <p class="date_dialog"><?=$messages[$g]['date']?></p>
                    </div>
                </div>
                <div class="clearfix colelem" id="u162816-4"><!-- content -->
                    <p><span id="u162816"><?=$messages[$g]['text']?></span></p>
                </div>
            </div>
                <?php $g=$g-1;?>
            <?php endfor; ?>
</div>







            <div class="clearfix colelem shared_content" id="pu133510" data-content-guid="pu133510_content"><!-- group -->


                <?php $form = ActiveForm::begin();?>
                <div id="ajax"></div>
<!--                <div class="rounded-corners grpelem" id="u133510"> </div>-->
                <?= $form->field($model, 'message')->textInput(['autofocus' => true, 'class'=> 'field', 'id'=>'u150187-4']) ?>


<!--                    <p id="u150187-2">ОК</p>-->
                    <?= Html::submitButton('Ok', ['class' => 'transition rounded-corners clearfix grpelem', 'name' => 'send-button', 'id'=>'u150187-4']) ?>

            </div>

                <?php ActiveForm::end(); ?>


            </div>
        </div>
        <div class="verticalspacer" data-offset-top="739" data-content-above-spacer="739" data-content-below-spacer="424"></div>
        <div class="browser_width colelem" id="u31041-bw">
            <div id="u31041"><!-- group -->
                <div class="clearfix" id="u31041_align_to_page">
                    <div class="clearfix grpelem" id="pu32840"><!-- column -->
                        <a class="nonblock nontext clip_frame colelem shared_content" id="u32840" href="index.html" data-content-guid="u32840_content"><!-- image --><img class="block temp_no_img_src" id="u32840_img" data-orig-src="../dialog/images/art%20%d0%bf%d1%80%d0%be%d1%81%d1%82%d1%96%d1%80.png?crc=3989492883" alt="" width="189" height="57" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                        <div class="clearfix colelem shared_content" id="pu32850-4" data-content-guid="pu32850-4_content"><!-- group -->
                            <div class="clearfix grpelem shared_content" id="u32850-4" data-content-guid="u32850-4_content"><!-- content -->
                                <p id="u32850-2">За питаннями:</p>
                            </div>
                            <div class="clearfix grpelem shared_content" id="u32851-4" data-content-guid="u32851-4_content"><!-- content -->
                                <p id="u32851-2">support@art.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix grpelem shared_content" id="u32847-4" data-content-guid="u32847-4_content"><!-- content -->
                        <p id="u32847-2">ART ПРОСТІР - це гелерея в якій ви можете придбати чи продати картину онлайн, виставити її на аукціон чи позмагатися за найкрасивішу картину на ньому.</p>
                    </div>
                    <div class="clearfix grpelem" id="ppu33401"><!-- column -->
                        <div class="clearfix colelem" id="pu33401"><!-- group -->
                            <a class="nonblock nontext clip_frame grpelem shared_content" id="u33401" href="index.html" data-content-guid="u33401_content"><!-- image --><img class="block temp_no_img_src" id="u33401_img" data-orig-src="../dialog/images/facebook%20white.png?crc=4146914870" alt="" width="41" height="39" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                            <a class="nonblock nontext clip_frame grpelem shared_content" id="u33391" href="index.html" data-content-guid="u33391_content"><!-- image --><img class="block temp_no_img_src" id="u33391_img" data-orig-src="../dialog/images/inst%20white.png?crc=276284755" alt="" width="39" height="39" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                        </div>
                        <div class="clearfix colelem shared_content" id="u32819-4" data-content-guid="u32819-4_content"><!-- content -->
                            <p id="u32819-2">Всі права належать © 2020 auction-gallery.ga</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakpoint" id="bp_1140" data-min-width="961" data-max-width="1140"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="browser_width colelem temp_no_id" data-orig-id="u120395-bw">
            <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                    <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu31643"><!-- horizontal box -->
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31672"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31673"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31676-4"><!-- content --><span class="placeholder" data-placeholder-for="u31676-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31644"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31647"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31648-4"><!-- content --><span class="placeholder" data-placeholder-for="u31648-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31665"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31666"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31667-4"><!-- content --><span class="placeholder" data-placeholder-for="u31667-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31651"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31654"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31657-4"><!-- content --><span class="placeholder" data-placeholder-for="u31657-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31658"><!-- vertical box -->
                            <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u31659"><!-- horizontal box -->
                                <div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31662-4"><!-- content -->
                                    <span class="placeholder" data-placeholder-for="u31662-2_content"><!-- placeholder node --></span>
                                </div>
                                <div class="grpelem temp_no_id" data-orig-id="u31660"><!-- content --></div>
                            </div>
                            <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u31663"><!-- vertical box -->
                                <div class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u31664"><!-- vertical box -->
                                    <div class="position_content temp_no_id" data-orig-id="u31664_position_content">
                                        <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89157"><!-- horizontal box -->
                                            <div class="MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" data-orig-id="u89159"><!-- horizontal box -->
                                                <div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89163-7"><!-- content -->
                                                    <span class="placeholder" data-placeholder-for="u89163-5_content"><!-- placeholder node --></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89249"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u89250"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89252-4"><!-- content --><span class="placeholder" data-placeholder-for="u89252-2_content"><!-- placeholder node --></span></div></a>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89405"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u89408"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89411-4"><!-- content --><span class="placeholder" data-placeholder-for="u89411-2_content"><!-- placeholder node --></span></div></a>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89552"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="index.html" data-orig-id="u89553"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89555-4"><!-- content --><span class="placeholder" data-placeholder-for="u89555-2_content"><!-- placeholder node --></span></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <div class="verticalspacer shared_content" data-offset-top="739" data-content-above-spacer="739" data-content-below-spacer="224" data-content-guid="page_2_content"></div>
        <div class="browser_width colelem temp_no_id" data-orig-id="u31041-bw">
            <div class="temp_no_id" data-orig-id="u31041"><!-- column -->
                <div class="clearfix temp_no_id" data-orig-id="u31041_align_to_page">
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32840"><!-- group -->
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32840_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32847-4_content"><!-- placeholder node --></span>
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33401_content"><!-- placeholder node --></span>
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33391_content"><!-- placeholder node --></span>
                    </div>
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32850-4"><!-- group -->
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32850-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32851-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32819-4_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakpoint" id="bp_960" data-min-width="801" data-max-width="960"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="browser_width colelem temp_no_id" data-orig-id="u120395-bw">
            <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                    <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu31643"><!-- horizontal box -->
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31672"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31673"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31676-4"><!-- content --><span class="placeholder" data-placeholder-for="u31676-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31644"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31647"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31648-4"><!-- content --><span class="placeholder" data-placeholder-for="u31648-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31665"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31666"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31667-4"><!-- content --><span class="placeholder" data-placeholder-for="u31667-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31651"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31654"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31657-4"><!-- content --><span class="placeholder" data-placeholder-for="u31657-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31658"><!-- vertical box -->
                            <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u31659"><!-- horizontal box -->
                                <div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31662-4"><!-- content -->
                                    <span class="placeholder" data-placeholder-for="u31662-2_content"><!-- placeholder node --></span>
                                </div>
                                <div class="grpelem temp_no_id" data-orig-id="u31660"><!-- content --></div>
                            </div>
                            <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u31663"><!-- vertical box -->
                                <div class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u31664"><!-- vertical box -->
                                    <div class="position_content temp_no_id" data-orig-id="u31664_position_content">
                                        <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89157"><!-- horizontal box -->
                                            <div class="MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" data-orig-id="u89159"><!-- horizontal box -->
                                                <div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89163-7"><!-- content -->
                                                    <span class="placeholder" data-placeholder-for="u89163-5_content"><!-- placeholder node --></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89249"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u89250"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89252-4"><!-- content --><span class="placeholder" data-placeholder-for="u89252-2_content"><!-- placeholder node --></span></div></a>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89405"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u89408"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89411-4"><!-- content --><span class="placeholder" data-placeholder-for="u89411-2_content"><!-- placeholder node --></span></div></a>
                                        </div>
                                        <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89552"><!-- horizontal box -->
                                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="index.html" data-orig-id="u89553"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89555-4"><!-- content --><span class="placeholder" data-placeholder-for="u89555-2_content"><!-- placeholder node --></span></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
        <div class="browser_width colelem temp_no_id" data-orig-id="u31041-bw">
            <div class="temp_no_id" data-orig-id="u31041"><!-- column -->
                <div class="clearfix temp_no_id" data-orig-id="u31041_align_to_page">
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32840"><!-- group -->
                        <a class="nonblock nontext clip_frame grpelem temp_no_id shared_content" href="index.html" data-orig-id="u32840" data-content-guid="u32840_content1"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="../dialog/images/art%20%d0%bf%d1%80%d0%be%d1%81%d1%82%d1%96%d1%80.png?crc=3989492883" alt="" width="140" height="42" data-orig-id="u32840_img" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32847-4_content"><!-- placeholder node --></span>
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33401_content"><!-- placeholder node --></span>
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33391_content"><!-- placeholder node --></span>
                    </div>
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32850-4"><!-- group -->
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32850-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32851-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32819-4_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakpoint" id="bp_800" data-min-width="721" data-max-width="800"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="browser_width colelem temp_no_id" data-orig-id="u120395-bw">
            <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                    <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu31643"><!-- horizontal box -->
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31672"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31673"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31676-4"><!-- content --><span class="placeholder" data-placeholder-for="u31676-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31644"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31647"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31648-4"><!-- content --><span class="placeholder" data-placeholder-for="u31648-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31665"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31666"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31667-4"><!-- content --><span class="placeholder" data-placeholder-for="u31667-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31651"><!-- vertical box -->
                            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="index.html" data-orig-id="u31654"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31657-4"><!-- content --><span class="placeholder" data-placeholder-for="u31657-4_0_content"><!-- placeholder node --></span></div></a>
                        </div>
                        <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u31658"><!-- vertical box -->
                            <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u31659"><!-- horizontal box -->
                                <div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u31662-4"><!-- content -->
                                    <span class="placeholder" data-placeholder-for="u31662-2_content"><!-- placeholder node --></span>
                                </div>
                                <div class="grpelem temp_no_id" data-orig-id="u31660"><!-- content --></div>
                            </div>
                            <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u31663"><!-- vertical box -->
                                <div class="position_content" id="u31663_position_content">
                                    <div class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u31664"><!-- vertical box -->
                                        <div class="position_content temp_no_id" data-orig-id="u31664_position_content">
                                            <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89157"><!-- horizontal box -->
                                                <div class="MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" data-orig-id="u89159"><!-- horizontal box -->
                                                    <div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89163-7"><!-- content -->
                                                        <span class="placeholder" data-placeholder-for="u89163-5_content"><!-- placeholder node --></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89249"><!-- horizontal box -->
                                                <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u89250"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89252-4"><!-- content --><span class="placeholder" data-placeholder-for="u89252-2_content"><!-- placeholder node --></span></div></a>
                                            </div>
                                            <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89405"><!-- horizontal box -->
                                                <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u89408"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89411-4"><!-- content --><span class="placeholder" data-placeholder-for="u89411-2_content"><!-- placeholder node --></span></div></a>
                                            </div>
                                            <div class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u89552"><!-- horizontal box -->
                                                <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="index.html" data-orig-id="u89553"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem temp_no_id" data-orig-id="u89555-4"><!-- content --><span class="placeholder" data-placeholder-for="u89555-2_content"><!-- placeholder node --></span></div></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
        <div class="browser_width colelem temp_no_id" data-orig-id="u31041-bw">
            <div class="temp_no_id" data-orig-id="u31041"><!-- column -->
                <div class="clearfix temp_no_id" data-orig-id="u31041_align_to_page">
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32840"><!-- group -->
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32840_content1"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32847-4_content"><!-- placeholder node --></span>
                        <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.html" data-orig-id="u33401"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="../dialog/images/facebook%20white.png?crc=4146914870" alt="" width="36" height="34" data-orig-id="u33401_img" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                        <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.html" data-orig-id="u33391"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="../dialog/images/inst%20white.png?crc=276284755" alt="" width="34" height="34" data-orig-id="u33391_img" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                    </div>
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32850-4"><!-- group -->
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32850-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32851-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32819-4_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakpoint" id="bp_720" data-min-width="641" data-max-width="720"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="clearfix colelem" id="pu34251"><!-- group -->
            <div class="grpelem shared_content" id="u34251" data-content-guid="u34251_content"><!-- simple frame --></div>
            <div class="browser_width grpelem temp_no_id" data-orig-id="u120395-bw">
                <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                    <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
            <div class="PamphletWidget clearfix grpelem" id="pamphletu103458"><!-- none box -->
                <div class="ThumbGroup clearfix grpelem" id="u103469"><!-- none box -->
                    <div class="popup_anchor" id="u103470popup">
                        <div class="Thumb popup_element clearfix" id="u103470"><!-- group -->
                            <div class="clearfix grpelem shared_content" id="u103638" data-content-guid="u103638_content"><!-- column -->
                                <div class="colelem" id="u103639"><!-- simple frame --></div>
                                <div class="colelem" id="u103640"><!-- simple frame --></div>
                                <div class="colelem" id="u103641"><!-- simple frame --></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup_anchor" id="u103465popup">
                    <div class="ContainerGroup clearfix" id="u103465"><!-- stack box -->
                        <div class="Container invi clearfix grpelem" id="u103467"><!-- group -->
                            <nav class="MenuBar clearfix grpelem" id="menuu103731"><!-- vertical box -->
                                <div class="MenuItemContainer borderbox clearfix colelem" id="u103746"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u103747" href="cabinet.html"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem" id="u103749-4"><!-- content --><p class="shared_content" data-content-guid="u103749-4_0_content">ГАЛЕРЕЯ</p></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem" id="u103739"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u103740" href="cabinet.html"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem" id="u103743-4"><!-- content --><p class="shared_content" data-content-guid="u103743-4_0_content">АУКЦІОН</p></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem" id="u103732"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u103735" href="cabinet.html"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem" id="u103737-4"><!-- content --><p class="shared_content" data-content-guid="u103737-4_0_content">FAQ</p></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem" id="u103753"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u103756" href="cabinet.html"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem" id="u103758-4"><!-- content --><p class="shared_content" data-content-guid="u103758-4_0_content">КОНТАКТИ</p></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem" id="u103760"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u103763" href="cabinet.html"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem" id="u103764-4"><!-- content --><p id="u103764-2" class="shared_content" data-content-guid="u103764-2_content">МІЙ ПРОФІЛЬ</p></div></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
        <div class="browser_width colelem temp_no_id" data-orig-id="u31041-bw">
            <div class="temp_no_id" data-orig-id="u31041"><!-- column -->
                <div class="clearfix temp_no_id" data-orig-id="u31041_align_to_page">
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32840"><!-- group -->
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32840_content1"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32847-4_content"><!-- placeholder node --></span>
                        <a class="nonblock nontext clip_frame grpelem temp_no_id shared_content" href="index.html" data-orig-id="u33401" data-content-guid="u33401_content1"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="../dialog/images/facebook%20white.png?crc=4146914870" alt="" width="29" height="28" data-orig-id="u33401_img" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                        <a class="nonblock nontext clip_frame grpelem temp_no_id shared_content" href="index.html" data-orig-id="u33391" data-content-guid="u33391_content1"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="../dialog/images/inst%20white.png?crc=276284755" alt="" width="28" height="28" data-orig-id="u33391_img" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                    </div>
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32850-4"><!-- group -->
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32850-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32851-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32819-4_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakpoint" id="bp_640" data-min-width="481" data-max-width="640"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34251"><!-- group -->
            <span class="grpelem placeholder" data-placeholder-for="u34251_content"><!-- placeholder node --></span>
            <div class="browser_width grpelem temp_no_id" data-orig-id="u120395-bw">
                <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                    <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
            <div class="PamphletWidget clearfix grpelem temp_no_id" data-orig-id="pamphletu103458"><!-- none box -->
                <div class="ThumbGroup clearfix grpelem temp_no_id" data-orig-id="u103469"><!-- none box -->
                    <div class="popup_anchor temp_no_id" data-orig-id="u103470popup">
                        <div class="Thumb popup_element clearfix temp_no_id" data-orig-id="u103470"><!-- group -->
                            <span class="clearfix grpelem placeholder" data-placeholder-for="u103638_content"><!-- placeholder node --></span>
                        </div>
                    </div>
                </div>
                <div class="popup_anchor temp_no_id" data-orig-id="u103465popup">
                    <div class="ContainerGroup clearfix temp_no_id" data-orig-id="u103465"><!-- stack box -->
                        <div class="Container invi clearfix grpelem temp_no_id" data-orig-id="u103467"><!-- group -->
                            <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu103731"><!-- vertical box -->
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103746"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103747"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103749-4"><!-- content --><span class="placeholder" data-placeholder-for="u103749-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103739"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103740"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103743-4"><!-- content --><span class="placeholder" data-placeholder-for="u103743-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103732"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103735"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103737-4"><!-- content --><span class="placeholder" data-placeholder-for="u103737-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103753"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103756"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103758-4"><!-- content --><span class="placeholder" data-placeholder-for="u103758-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103760"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103763"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103764-4"><!-- content --><span class="placeholder" data-placeholder-for="u103764-2_content"><!-- placeholder node --></span></div></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
        <div class="browser_width colelem temp_no_id" data-orig-id="u31041-bw">
            <div class="temp_no_id" data-orig-id="u31041"><!-- column -->
                <div class="clearfix temp_no_id" data-orig-id="u31041_align_to_page">
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32840"><!-- group -->
                        <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.html" data-orig-id="u32840"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="../dialog/images/art%20%d0%bf%d1%80%d0%be%d1%81%d1%82%d1%96%d1%80.png?crc=3989492883" alt="" width="118" height="35" data-orig-id="u32840_img" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32847-4_content"><!-- placeholder node --></span>
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33401_content1"><!-- placeholder node --></span>
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33391_content1"><!-- placeholder node --></span>
                    </div>
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32850-4"><!-- group -->
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32850-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32851-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32819-4_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakpoint" id="bp_480" data-min-width="415" data-max-width="480"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34251"><!-- group -->
            <span class="grpelem placeholder" data-placeholder-for="u34251_content"><!-- placeholder node --></span>
            <div class="browser_width grpelem temp_no_id" data-orig-id="u120395-bw">
                <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                    <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
            <div class="PamphletWidget clearfix grpelem temp_no_id" data-orig-id="pamphletu103458"><!-- none box -->
                <div class="ThumbGroup clearfix grpelem temp_no_id" data-orig-id="u103469"><!-- none box -->
                    <div class="popup_anchor temp_no_id" data-orig-id="u103470popup">
                        <div class="Thumb popup_element clearfix temp_no_id" data-orig-id="u103470"><!-- group -->
                            <span class="clearfix grpelem placeholder" data-placeholder-for="u103638_content"><!-- placeholder node --></span>
                        </div>
                    </div>
                </div>
                <div class="popup_anchor temp_no_id" data-orig-id="u103465popup">
                    <div class="ContainerGroup clearfix temp_no_id" data-orig-id="u103465"><!-- stack box -->
                        <div class="Container invi clearfix grpelem temp_no_id" data-orig-id="u103467"><!-- group -->
                            <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu103731"><!-- vertical box -->
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103746"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103747"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103749-4"><!-- content --><span class="placeholder" data-placeholder-for="u103749-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103739"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103740"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103743-4"><!-- content --><span class="placeholder" data-placeholder-for="u103743-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103732"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103735"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103737-4"><!-- content --><span class="placeholder" data-placeholder-for="u103737-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103753"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103756"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103758-4"><!-- content --><span class="placeholder" data-placeholder-for="u103758-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103760"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103763"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103764-4"><!-- content --><span class="placeholder" data-placeholder-for="u103764-2_content"><!-- placeholder node --></span></div></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
        <div class="browser_width colelem temp_no_id shared_content" data-orig-id="u31041-bw" data-content-guid="u31041-bw_content">
            <div class="temp_no_id" data-orig-id="u31041"><!-- group -->
                <div class="clearfix temp_no_id" data-orig-id="u31041_align_to_page">
                    <div class="clearfix grpelem temp_no_id" data-orig-id="pu32840"><!-- column -->
                        <a class="nonblock nontext clip_frame colelem temp_no_id shared_content" href="index.html" data-orig-id="u32840" data-content-guid="u32840_content2"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="../dialog/images/art%20%d0%bf%d1%80%d0%be%d1%81%d1%82%d1%96%d1%80.png?crc=3989492883" alt="" width="146" height="44" data-orig-id="u32840_img" src="../dialog/images/blank.gif?crc=4208392903"/></a>
                        <div class="clearfix colelem temp_no_id" data-orig-id="pu33401"><!-- group -->
                            <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33401_content1"><!-- placeholder node --></span>
                            <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33391_content1"><!-- placeholder node --></span>
                        </div>
                    </div>
                    <div class="clearfix grpelem" id="ppu32850-4"><!-- column -->
                        <span class="clearfix colelem placeholder" data-placeholder-for="pu32850-4_content"><!-- placeholder node --></span>
                        <span class="clearfix colelem placeholder" data-placeholder-for="u32819-4_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakpoint" id="bp_414" data-min-width="376" data-max-width="414"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34251"><!-- group -->
            <span class="grpelem placeholder" data-placeholder-for="u34251_content"><!-- placeholder node --></span>
            <div class="browser_width grpelem temp_no_id" data-orig-id="u120395-bw">
                <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                    <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
            <div class="PamphletWidget clearfix grpelem temp_no_id" data-orig-id="pamphletu103458"><!-- none box -->
                <div class="ThumbGroup clearfix grpelem temp_no_id" data-orig-id="u103469"><!-- none box -->
                    <div class="popup_anchor temp_no_id" data-orig-id="u103470popup">
                        <div class="Thumb popup_element clearfix temp_no_id" data-orig-id="u103470"><!-- group -->
                            <span class="clearfix grpelem placeholder" data-placeholder-for="u103638_content"><!-- placeholder node --></span>
                        </div>
                    </div>
                </div>
                <div class="popup_anchor temp_no_id" data-orig-id="u103465popup">
                    <div class="ContainerGroup clearfix temp_no_id" data-orig-id="u103465"><!-- stack box -->
                        <div class="Container invi clearfix grpelem temp_no_id" data-orig-id="u103467"><!-- group -->
                            <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu103731"><!-- vertical box -->
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103746"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103747"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103749-4"><!-- content --><span class="placeholder" data-placeholder-for="u103749-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103739"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103740"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103743-4"><!-- content --><span class="placeholder" data-placeholder-for="u103743-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103732"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103735"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103737-4"><!-- content --><span class="placeholder" data-placeholder-for="u103737-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103753"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103756"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103758-4"><!-- content --><span class="placeholder" data-placeholder-for="u103758-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103760"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103763"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103764-4"><!-- content --><span class="placeholder" data-placeholder-for="u103764-2_content"><!-- placeholder node --></span></div></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
        <span class="browser_width colelem placeholder" data-placeholder-for="u31041-bw_content"><!-- placeholder node --></span>
    </div>
</div>
<div class="breakpoint" id="bp_375" data-min-width="321" data-max-width="375"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34251"><!-- group -->
            <span class="grpelem placeholder" data-placeholder-for="u34251_content"><!-- placeholder node --></span>
            <div class="browser_width grpelem temp_no_id" data-orig-id="u120395-bw">
                <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                    <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
            <div class="PamphletWidget clearfix grpelem temp_no_id" data-orig-id="pamphletu103458"><!-- none box -->
                <div class="ThumbGroup clearfix grpelem temp_no_id" data-orig-id="u103469"><!-- none box -->
                    <div class="popup_anchor temp_no_id" data-orig-id="u103470popup">
                        <div class="Thumb popup_element clearfix temp_no_id" data-orig-id="u103470"><!-- group -->
                            <span class="clearfix grpelem placeholder" data-placeholder-for="u103638_content"><!-- placeholder node --></span>
                        </div>
                    </div>
                </div>
                <div class="popup_anchor temp_no_id" data-orig-id="u103465popup">
                    <div class="ContainerGroup clearfix temp_no_id" data-orig-id="u103465"><!-- stack box -->
                        <div class="Container invi clearfix grpelem temp_no_id" data-orig-id="u103467"><!-- group -->
                            <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu103731"><!-- vertical box -->
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103746"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103747"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103749-4"><!-- content --><span class="placeholder" data-placeholder-for="u103749-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103739"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103740"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103743-4"><!-- content --><span class="placeholder" data-placeholder-for="u103743-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103732"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103735"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103737-4"><!-- content --><span class="placeholder" data-placeholder-for="u103737-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103753"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103756"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103758-4"><!-- content --><span class="placeholder" data-placeholder-for="u103758-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103760"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103763"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103764-4"><!-- content --><span class="placeholder" data-placeholder-for="u103764-2_content"><!-- placeholder node --></span></div></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
        <div class="browser_width colelem temp_no_id" data-orig-id="u31041-bw">
            <div class="temp_no_id" data-orig-id="u31041"><!-- column -->
                <div class="clearfix temp_no_id" data-orig-id="u31041_align_to_page">
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32840"><!-- group -->
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32840_content2"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32850-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32851-4_content"><!-- placeholder node --></span>
                    </div>
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu33401"><!-- group -->
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33401_content1"><!-- placeholder node --></span>
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33391_content1"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32819-4_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakpoint" id="bp_320" data-max-width="320"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34251"><!-- group -->
            <span class="grpelem placeholder" data-placeholder-for="u34251_content"><!-- placeholder node --></span>
            <div class="browser_width grpelem temp_no_id" data-orig-id="u120395-bw">
                <div class="temp_no_id" data-orig-id="u120395"><!-- group -->
                    <div class="clearfix temp_no_id" data-orig-id="u120395_align_to_page">
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u32632_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
            <div class="PamphletWidget clearfix grpelem temp_no_id" data-orig-id="pamphletu103458"><!-- none box -->
                <div class="ThumbGroup clearfix grpelem temp_no_id" data-orig-id="u103469"><!-- none box -->
                    <div class="popup_anchor temp_no_id" data-orig-id="u103470popup">
                        <div class="Thumb popup_element clearfix temp_no_id" data-orig-id="u103470"><!-- group -->
                            <span class="clearfix grpelem placeholder" data-placeholder-for="u103638_content"><!-- placeholder node --></span>
                        </div>
                    </div>
                </div>
                <div class="popup_anchor temp_no_id" data-orig-id="u103465popup">
                    <div class="ContainerGroup clearfix temp_no_id" data-orig-id="u103465"><!-- stack box -->
                        <div class="Container invi clearfix grpelem temp_no_id" data-orig-id="u103467"><!-- group -->
                            <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu103731"><!-- vertical box -->
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103746"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103747"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103749-4"><!-- content --><span class="placeholder" data-placeholder-for="u103749-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103739"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103740"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103743-4"><!-- content --><span class="placeholder" data-placeholder-for="u103743-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103732"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103735"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103737-4"><!-- content --><span class="placeholder" data-placeholder-for="u103737-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103753"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103756"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103758-4"><!-- content --><span class="placeholder" data-placeholder-for="u103758-4_0_content"><!-- placeholder node --></span></div></a>
                                </div>
                                <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u103760"><!-- horizontal box -->
                                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="cabinet.html" data-orig-id="u103763"><!-- horizontal box --><div class="MenuItemLabel borderbox clearfix grpelem temp_no_id" data-orig-id="u103764-4"><!-- content --><span class="placeholder" data-placeholder-for="u103764-2_content"><!-- placeholder node --></span></div></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u133497"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133500_content"><!-- placeholder node --></span>
            <span class="colelem placeholder" data-placeholder-for="u133522_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u150178_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163200_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u163107_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162921_content"><!-- placeholder node --></span>
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u162828_content"><!-- placeholder node --></span>
            <span class="clearfix colelem placeholder" data-placeholder-for="pu133510_content"><!-- placeholder node --></span>
        </div>
        <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
        <div class="browser_width colelem temp_no_id" data-orig-id="u31041-bw">
            <div class="temp_no_id" data-orig-id="u31041"><!-- column -->
                <div class="clearfix temp_no_id" data-orig-id="u31041_align_to_page">
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu32840"><!-- group -->
                        <a class="nonblock nontext clip_frame grpelem temp_no_id" href="index.html" data-orig-id="u32840"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="../dialog/images/art%20%d0%bf%d1%80%d0%be%d1%81%d1%82%d1%96%d1%80.png?crc=3989492883" alt="" width="128" height="38" data-orig-id="u32840_img" src=".?crc=4208392903"/></a>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32850-4_content"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32851-4_content"><!-- placeholder node --></span>
                    </div>
                    <div class="clearfix colelem temp_no_id" data-orig-id="pu33401"><!-- group -->
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33401_content1"><!-- placeholder node --></span>
                        <span class="nonblock nontext clip_frame grpelem placeholder" data-placeholder-for="u33391_content1"><!-- placeholder node --></span>
                        <span class="clearfix grpelem placeholder" data-placeholder-for="u32819-4_content"><!-- placeholder node --></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Other scripts -->
<script type="text/javascript">
    // Decide weather to suppress missing file error or not based on preference setting
    var suppressMissingFileError = false
</script>
<script type="text/javascript">
    window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
        16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
        l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
        f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length&&Muse.assets.required.length)f="Некоторые файлы на сервере могут отсутствовать или быть некорректными. Очистите кэш-память браузера и повторите попытку. Если проблему не удается устранить, свяжитесь с разработчиками сайта.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
        setTimeout(function(){g(!0)},5E3):g()}};
    var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","jquery.watch","webpro","musewpslideshow","jquery.museoverlay","touchswipe","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
        window.Muse.assets.check($);/* body */
        Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
        Muse.Utils.prepHyperlinks(true);/* body */
        Muse.Utils.resizeHeight('.browser_width');/* resize height */
        Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
        Muse.Utils.fullPage('#page');/* 100% height page */
        Muse.Utils.initWidget('.MenuBar', ['#bp_infinity', '#bp_1140', '#bp_960', '#bp_800', '#bp_720', '#bp_640', '#bp_480', '#bp_414', '#bp_375', '#bp_320'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
        Muse.Utils.initWidget('#pamphletu103458', ['#bp_720', '#bp_640', '#bp_480', '#bp_414', '#bp_375', '#bp_320'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:false,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); });/* #pamphletu103458 */
        $( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
        Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
    }catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
<!-- RequireJS script -->

<script src="/../scripts/require.js?crc=3951022091" type="text/javascript" async data-main="/../scripts/museconfig.js?crc=474374037" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
</body>
</html>
