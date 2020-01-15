<?php

namespace frontend\controllers;

use common\models\Job;
use common\models\JobApplication;
use common\models\JobClassification;
use common\models\JobType;
use common\models\Nationality;
use common\models\Status;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

/**
 * Class JobseekersController
 *
 * @package frontend\controllers
 */
class JobseekersController extends Controller{

	/**
	 * @return string
	 */
	public function actionIndex(){
		$classifications = JobClassification::find()->all();
		$types           = JobType::find()->all();
		$nationalities   = Nationality::find()->all();
		$jobs            = Job::find()->alias('job')
		                      ->with(['classification', 'type', 'location'])
		                      ->where(['job.status' => 10]);
		$job_apply       = new JobApplication();
		$search          = [
			'job_title'          => '',
			'job_classification' => '',
			'job_type'           => '',
		];
		if (Yii::$app->request->post()){
			$search = Yii::$app->request->post();
			if (!empty($search['job_title'])){
				$jobs = $jobs->andWhere(['like', 'title', $search['job_title']]);
			}
			if (!empty($search['job_classification'])){
				$jobs = $jobs->andWhere(['classification_id' => $search['job_classification']]);
			}
			if (!empty($search['job_type'])){
				$jobs = $jobs->andWhere(['type_id' => $search['job_type']]);
			}
		}

		$pages = new Pagination(['totalCount' => $jobs->count(), 'defaultPageSize' => '5']);
		$jobs  = $jobs->offset($pages->offset)->limit($pages->limit)->all();

		return $this->render('index',
			[
				'classifications' => $classifications,
				'types'           => $types,
				'nationalities'   => $nationalities,
				'jobs'            => $jobs,
				'pages'           => $pages,
				'job_apply'       => $job_apply,
				'search'          => $search
			]);
	}

	/**
	 * @param $id
	 *
	 * @return string
	 */
	public function actionDetail($id){
		$job_apply     = new JobApplication();
		$job_detail    = Job::find()->where(['id' => $id])->one();
		$nationalities = Nationality::find()->all();
		if ($job_detail !== NULL){
			return $this->render('detail',
				[
					'job_detail'    => $job_detail,
					'nationalities' => $nationalities,
					'job_apply'     => $job_apply,
				]);
		}

		return $this->goBack();
	}

	/**
	 * @param $id
	 *
	 * @return array|\yii\web\Response
	 */
	public function actionDepositResume($id){
		$job_apply = new JobApplication;
		if (Yii::$app->request->isAjax && $job_apply->load(Yii::$app->request->post())){
			Yii::$app->response->format = Response::FORMAT_JSON;

			return ActiveForm::validate($job_apply);
		}
		if ($job_apply->load(Yii::$app->request->post())){
			$job_apply->job_id = $id;
			$job_apply->status = Status::STATUS_ACTIVE;
			$job_apply->file   = UploadedFile::getInstance($job_apply, 'file');
			$name_file         = "attachment_resume" . time() . "." . $job_apply->file->extension;
			$job_apply->resume = $name_file;
			if ($job_apply->save() and $job_apply->upload()){
				Yii::$app->session->setFlash('success', 'Successfully!');
			}else{
				Yii::$app->session->setFlash('error', $job_apply->errors);
			}
		}

		return $this->redirect(Yii::$app->request->referrer);
	}
}