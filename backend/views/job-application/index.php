<?php

use common\models\Job;
use common\models\JobApplication;
use common\models\Nationality;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\JobApplicationSearch $search_model
 * @var yii\data\ActiveDataProvider $data_provider
 */

$this->title                   = 'Job Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-application-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		<?= Html::a('Create Job Application', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

	<?= GridView::widget([
		'dataProvider' => $data_provider,
		'filterModel'  => $search_model,
		'columns'      => [

			'id',
			[
				'attribute' => 'job_id',
				'value'     => 'job.title',
				'filter'    => Html::activeDropDownList($search_model, 'job_id',
					ArrayHelper::map(Job::find()->all(), 'id', 'title'),
					['class' => 'form-control', 'prompt' => ''])
			],
			'name',
			[
				'attribute' => 'nationality_id',
				'value'     => 'nationality.name',
				'filter'    => Html::activeDropDownList($search_model, 'nationality_id',
					ArrayHelper::map(Nationality::find()->all(), 'id', 'name'),
					['class' => 'form-control', 'prompt' => ''])
			],
			'address',
			[
				'attribute' => 'current_salary',
				'filter'    => Html::activeDropDownList($search_model, 'current_salary',
					ArrayHelper::map(JobApplication::find()->all(), 'current_salary',
						'current_salary'),
					['class' => 'form-control', 'prompt' => ''])
			],
			[
				'attribute' => 'expected_salary',
				'filter'    => Html::activeDropDownList($search_model, 'expected_salary',
					ArrayHelper::map(JobApplication::find()->all(), 'expected_salary',
						'expected_salary'),
					['class' => 'form-control', 'prompt' => ''])
			],
			[
				'attribute' => 'resume',
				'format'    => 'raw',
				'value'     => function ($data){
					/**
					 * @var common\models\JobApplication $data
					 */
					return
						Html::a('Download file', ['job-application/download', 'id' => $data->id],
							['class' => 'btn btn-primary']);
				},
				'filter'    => FALSE,
			],
			[
				'class'    => 'yii\grid\ActionColumn',
				'template' => '{view} {delete}'
			],
		],
	]); ?>
</div>
