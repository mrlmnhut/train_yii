<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class AboutUsController
 *
 * @package frontend\controllers
 */
class AboutUsController extends Controller{

	/**
	 * @return string
	 */
	public function actionIndex(){
		return $this->render('index');
	}
}
