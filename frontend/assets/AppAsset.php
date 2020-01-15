<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle{

	public /** @noinspection PhpPropertyNamingConventionInspection */
		$basePath = '@webroot';
	public /** @noinspection PhpPropertyNamingConventionInspection */
		$baseUrl = '@web';
	public $css = [
		'css/main.css',
		'css/select2.min.css',
		'font/line-awesome/css/line-awesome.min.css',
	];
	public $js = [
		'js/kit-fontawesome.js',
		'js/popper.min.js',
		'js/select2.min.js',
		'js/main.js',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap4\BootstrapPluginAsset',
	];
}
