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
class JqueryUIAsset extends AssetBundle
{
 
   // public $basePath = '@webroot';
    //public $baseUrl = '@web';
	public $sourcePath = '@bower/jquery-ui';
 
    public $css = [
		'jquery-ui.min.css',
    ];
    public $js = [
	    'jquery-ui.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
