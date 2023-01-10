<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        //'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css',
    ];
    public $js = [
        'js/app.js',
        //'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
        //'https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
