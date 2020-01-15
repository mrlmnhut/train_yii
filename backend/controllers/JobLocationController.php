<?php

namespace backend\controllers;

use backend\models\JobLocationSearch;
use common\models\JobLocation;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * JobLocationController implements the CRUD actions for JobLocation model.
 */
class JobLocationController extends Controller{

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
	 * Lists all JobLocation models.
	 *
	 * @return mixed
	 */
	public function actionIndex(){
		$search_model  = new JobLocationSearch();
		$data_provider = $search_model->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'search_model'  => $search_model,
			'data_provider' => $data_provider,
		]);
	}

	/**
	 * Displays a single JobLocation model.
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
	 * Creates a new JobLocation model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 *
	 * @return mixed
	 */
	public function actionCreate(){
		$model = new JobLocation();

		if ($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('create', [
			'model' => $model,
		]);
	}

	/**
	 * Updates an existing JobLocation model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionUpdate($id){
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('update', [
			'model' => $model,
		]);
	}

	/**
	 * Deletes an existing JobLocation model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 * @throws \Throwable
	 * @throws \yii\db\StaleObjectException
	 * @throws \yii\web\NotFoundHttpException if the model cannot be found
	 */
	public function actionDelete($id){
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the JobLocation model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param integer $id
	 *
	 * @return JobLocation the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id){
		if (($model = JobLocation::findOne($id)) !== NULL){
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
}
