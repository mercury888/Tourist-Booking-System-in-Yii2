<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PlabAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
        //'css/bootstrap.min.css',
        // 'css/LineIcons.css',
        // 'css/viewer.min.css',
        // 'css/icofont.min.css',
        // // 'css/calendar.css',
        // 'css/styles.css',
        // 'css/responsive.css',
        // 'css/custom.css',
        // 'css/site.css',
    ];
    public $js = [
        // 'js/jquery.min.js',
        // 'js/popper.min.js',
        // 'js/bootstrap.min.js',
        // 'js/feather.min.js',
        // 'js/viewer.min.js',
        // 'js/apex-charts/apexcharts.min.js',
        //'js/apex-charts/apexcharts-stock-prices.js',
        //'js/apex-charts/apex-line-charts.js',
        //'js/apex-charts/apex-area-charts.js',
        //'js/apex-charts/apex-bar-charts.js',
        //'js/apex-charts/apex-mixed-charts.js',
        //'js/apex-charts/apex-pie-donuts-charts.js',
        //'js/apex-charts/sales-by-countries.js',
        // 'js/apex-charts/product-trends-by-month.js',
        //'js/apex-charts/month-sales-statistics.js',
        // 'js/apex-charts/order-summary.js',
        // 'js/apex-charts/visitors-overview.js',
        // 'js/apex-charts/leads-stats.js',
        // 'js/apex-charts/apex-column-charts.js',
        // 'js/custom-chart.js',
        // 'js/custom.js'
    ];
}
