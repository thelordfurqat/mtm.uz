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
        'css/bir.css',
//        'theme/assets/font-awesome.min.css',
        'theme/assets/css/bootstrap.min.css',
        'theme/assets/css/paper-dashboard.css?v=2.0.0',
        'theme/assets/demo/demo.css',
//        'css/site.css',
        'css/style.css',



    ];
    public $js = [
        'theme/assets/js/core/jquery.min.js',
        'theme/assets/js/core/popper.min.js',
        'theme/assets/js/core/bootstrap.min.js',
        'theme/assets/js/plugins/perfect-scrollbar.jquery.min.js',
        'theme/assets/js/plugins/chartjs.min.js',
        'theme/assets/js/plugins/bootstrap-notify.js',
        'theme/assets/js/paper-dashboard.min.js?v=2.0.0',
        'theme/assets/demo/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
