<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "web/public/css/bootstrap.min.css",
        "web/public/css/font-awesome.min.css",
        "web/public/css/animate.min.css",
        "web/public/css/owl.carousel.css",
        "web/public/css/owl.theme.css",
        "web/public/css/owl.transitions.css",
        "web/public/css/style.css",
        "web/public/css/responsive.css",
        "web/css/___-_____-6.css",
        "web/css/chat.css",
        "web/css/cabinet.css",
        "web/css/master_______-a.css",
        "web/css/nomq____-_____-5.css",
        "web/css/nomq____-_____-6.css",
        "web/css/nomq_auction.css",
        "web/css/nomq_chat.css",
        "web/css/nomq_gallery.css",
        "web/css/nomq_cabinet.css",
        "web/css/nomq_preview_master_______-a.css",
        "web/css/site_global.css",
        "web/css/site_global.css",
    ];
    public $js = [
        //"web/public/js/jquery-1.11.3.min.js",
        "web/public/js/bootstrap.min.js",
        "web/public/js/owl.carousel.min.js",
        "web/public/js/jquery.stickit.min.js",
        "web/public/js/menu.js",
        "web/public/js/scripts.js",
        "web/js/html5shiv.js",
        "web/js/jquery.musemenu.js",
        "web/js/jquery.museoverlay.js",
        "web/js/jquery.museresponsive.js",
        "web/js/jquery.watch.js",
        "web/js/jquery-1.8.3.min.js",
        "web/js/museconfig.js",
        "web/js/museutils.js",
        "web/js/musewpslideshow.js",
        "web/js/require.js",
        "web/js/touchswipe.js",
        "web/js/webpro.js",
        "web/js/whatinput.js",
    ];
    public $depends = [

    ];
}
