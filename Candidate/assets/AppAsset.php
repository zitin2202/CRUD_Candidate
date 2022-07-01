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
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
        'css/site.css',
        'css/style.css',
        'assets/v4shims/css/v4-shims.min.css',
//        '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',

    ];

    public $js = [
        'js/yii.confirm.overrides.js',
        'js/app.js',
        '//cdn.jsdelivr.net/npm/sweetalert2@11',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
//        'yidas\yii\fontawesome\FontawesomeAsset',


    ];
}
