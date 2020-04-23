<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        '/web/css/site.css',
//        "web/css/___-_____-5.css",
//        "web/css/___-_____-6.css",
//        "web/css/auction.css",
//        "web/css/cabinet.css",
//        "web/css/chat.css",
//        "web/css/index.css",
//        "web/css/nomq____-_____-5.css",
//        "web/css/nomq____-_____-6.css",
//        "web/css/nomq_auction.css",
//        "web/css/nomq_cabinet.css",
//        "web/css/nomq_chat.css",
//        "web/css/nomq_index.css",
//        "web/css/nomq_preview_master_______-a.css",
//        "web/css/site_global.css",



    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
