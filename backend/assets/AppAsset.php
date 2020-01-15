<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle{

	public /** @noinspection PhpPropertyNamingConventionInspection */
		$basePath = '@webroot';
	public /** @noinspection PhpPropertyNamingConventionInspection */
		$baseUrl = '@web';
	public $css = [
		'css/site.css',
	];
	public $js = [
		'ckeditor/ckeditor.js',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
