<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class NewsroomController
 *
 * @package frontend\controllers
 */
class NewsroomController extends Controller{

	/**
	 * @return string
	 */
	public function actionIndex(){
		return $this->render('index');
	}

	/**
	 * @return string
	 */
	public function actionDetail(){
		return $this->render('detail');
	}
}
