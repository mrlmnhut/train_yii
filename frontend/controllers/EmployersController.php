<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class EmployersController
 *
 * @package frontend\controllers
 */
class EmployersController extends Controller{

	/**
	 * @return string
	 */
	public function actionIndex(){
		return $this->render('index');
	}
}
