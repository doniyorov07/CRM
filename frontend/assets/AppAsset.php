<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
          'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',
          'shablon/assets/vendor/bootstrap/css/bootstrap.min.css',
          'shablon/assets/vendor/bootstrap-icons/bootstrap-icons.css',
          'shablon/assets/vendor/boxicons/css/boxicons.min.css',
          'shablon/assets/vendor/glightbox/css/glightbox.min.css',
          'shablon/assets/vendor/swiper/swiper-bundle.min.css',
          'shablon/assets/css/style.css'
    ];
    public $js = [
        'shablon/assets/js/main.js',
        'shablon/assets/vendor/purecounter/purecounter_vanilla.js',
        'shablon/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'shablon/assets/vendor/glightbox/js/glightbox.min.js',
        'shablon/assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'shablon/assets/vendor/swiper/swiper-bundle.min.js',
        'shablon/assets/vendor/php-email-form/validate.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
