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
        'css/bootstrap.min.css',
        'css/style.css',
        'css/custom.css',
        'css/vendors.css',
        'css/icons.css',
        'css/all.css',
        'css/mashable-menu.min.css',
        'css/jquery.expandable.css',
        // 'rev-slider-files/fonts/font-awesome/css/font-awesome.css',
        'css/jquery.expandable.css',
        // 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
        'https://resources/demos/style.css',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300i,400,600,700&display=swap&subset=latin-ext',
    ];
    public $js = [
        // 'js/jquery-2.2.4.min.js',
        'js/common_scripts_min.js',
        'js/functions.js',
        // 'js/map.js',
        'js/infobox.js',
        'js/rater.js',
        'js/jquery.sliderPro.min.js',
        'js/mashable-menu.min.js',
        'js/demo.js',
        'js/material.min.js',
        "https://use.fontawesome.com/f051d12993.js",
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js',
        // 'js/map.js',
        // 'js/infobox.js',
        // 'js/validate.js',s
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
