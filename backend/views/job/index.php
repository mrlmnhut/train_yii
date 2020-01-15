<?php

use common\models\Job;
use common\models\JobClassification;
use common\models\JobLocation;
use common\models\JobType;
use common\models\User;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\JobSearch $search_model
 * @var yii\data\ActiveDataProvider $data_provider
 */

$this->title                   = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		<?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

	<?= GridView::widget([
		'dataProvider' => $data_provider,
		'filterModel'  => $search_model,
		'columns'      => [

			'id',
			'title',
			[
				'attribute' => 'type_id',
				'value'     => 'type.name',
				'filter'    => Html::activeDropDownList($search_model, 'type_id',
					ArrayHelper::map(JobType::find()->all(), 'id', 'name'),
					['class' => 'form-control', 'prompt' => ''])
			],
			[
				'attribute' => 'classification_id',
				'value'     => 'classification.name',
				'filter'    => Html::activeDropDownList($search_model, 'classification_id',
					ArrayHelper::map(JobClassification::find()->all(), 'id', 'name'),
					['class' => 'form-control', 'prompt' => ''])
			],
			[
				'attribute' => 'location_id',
				'value'     => 'location.name',
				'filter'    => Html::activeDropDownList($search_model, 'location_id',
					ArrayHelper::map(JobLocation::find()->all(), 'id', 'name'),
					['class' => 'form-control', 'prompt' => ''])
			],
			[
				'attribute' => 'created_at',
				'format'    => ['date', 'php:d M Y'],
				'filter'    => Html::activeDropDownList($search_model, 'created_at',
					Job::getCreatedAt(),
					['class' => 'form-control', 'prompt' => ''])
			],
			[
				'attribute' => 'created_by',
				'value'     => 'createdBy.username',
				'filter'    => Html::activeDropDownList($search_model, 'created_by',
					ArrayHelper::map(User::find()->all(), 'id', 'username'),
					['class' => 'form-control', 'prompt' => ''])
			],

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
