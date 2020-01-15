<?php

namespace frontend\controllers;

use frontend\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller{

	/**
	 * {@inheritdoc}
	 */
	public function behaviors(){
		return [
			'access' => [
				'class' => AccessControl::class,
				'only'  => ['logout', 'signup'],
				'rules' => [
					[
						'actions' => ['signup'],
						'allow'   => TRUE,
						'roles'   => ['?'],
					],
					[
						'actions' => ['logout'],
						'allow'   => TRUE,
						'roles'   => ['@'],
					],
				],
			],
			'verbs'  => [
				'class'   => VerbFilter::class,
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function actions(){
		return [
			'error'   => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class'           => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : NULL,
			],
		];
	}

	/**
	 * Signs user up.
	 *
	 * @return mixed
	 * @throws \yii\base\Exception
	 */
	public function actionSignup(){
		$model = new SignupForm();
		if ($model->load(Yii::$app->request->post()) && $model->signup()){
			Yii::$app->session->setFlash('success',
				'Thank you for registration. Please check your inbox for verification email.');

			return $this->redirect(Yii::$app->request->referrer);
		}

		return $this->render('signup', [
			'model' => $model,
		]);
	}
}
