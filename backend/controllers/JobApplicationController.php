<?php

namespace backend\controllers;

use backend\models\JobApplicationSearch;
use common\models\JobApplication;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * JobApplicationController implements the CRUD actions for JobApplication model.
 */
class JobApplicationController extends Controller{

	/**
	 * {@inheritdoc}
	 */
	public function behaviors(){
		return [
			'access' => [
				'class' => AccessControl::class,
				'rules' => [
					[
						'actions' => ['login', 'error'],
						'allow'   => TRUE,
					],
					[
						'actions' => ['logout', 'index'],
						'allow'   => TRUE,
						'roles'   => ['@'],
					],
					[
						'allow' => TRUE,
						'roles' => ['@'],
					],
				],
			],
			'verbs'  => [
				'class'   => VerbFilter::class,
				'actions' => [
					'delete' => ['POST'],
				],
			],
		];
	}

	/**
	 * Lists all JobApplication models.
	 *
	 * @return mixed
	 */
	public function actionIndex(){
		$search_model  = new JobApplicationSearch();
		$data_provider = $search_model->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'search_model'  => $search_model,
			'data_provider' => $data_provider,
		]);
	}

	/**
	 * Displays a single JobApplication model.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionView($id){
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}


	/**
	 * @param $id
	 *
	 * @return \yii\web\Response
	 * @throws \Throwable
	 * @throws \yii\db\StaleObjectException
	 * @throws \yii\web\NotFoundHttpException
	 */
	public function actionDelete($id){
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the JobApplication model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param integer $id
	 *
	 * @return JobApplication the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id){
		if (($model = JobApplication::findOne($id)) !== NULL){
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}

	/**
	 * @param $id
	 *
	 * @return \yii\console\Response|\yii\web\Response
	 * @throws \yii\web\NotFoundHttpException
	 */
	public function actionDownload($id){
		$download = $this->findModel($id);
		$path     = Yii::getAlias('@webroot') . '/uploads/' . $download->resume;
		if (file_exists($path)){
			return Yii::$app->response->sendFile($path);
		}

		return $this->redirect(Yii::$app->request->referrer);
	}
}
