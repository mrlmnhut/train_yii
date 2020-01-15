<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class ContactUsController
 *
 * @package frontend\controllers
 */
class ContactUsController extends Controller{

	/**
	 * @return string
	 */
	public function actionIndex(){
		return $this->render('index');
	}
}
