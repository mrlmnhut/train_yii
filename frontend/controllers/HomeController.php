<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class HomeController
 *
 * @package frontend\controllers
 */
class HomeController extends Controller{

	/**
	 * @return string
	 */
	public function actionIndex(){
		return $this->render('index');
	}
}
