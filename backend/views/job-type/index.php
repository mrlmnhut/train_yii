<?php

use common\models\Status;
use common\models\User;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\JobTypeSearch $search_model
 * @var yii\data\ActiveDataProvider $data_provider
 */

$this->title                   = 'Job Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		<?= Html::a('Create Job Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	<?= GridView::widget([
		'dataProvider' => $data_provider,
		'filterModel'  => $search_model,
		'columns'      => [

			'id',
			'name',
			[
				'attribute' => 'status',
				'format'    => 'raw',
				'value'     => function ($data){
					/**
					 * @var common\models\JobLocation $data
					 */
					return Status::getStatusLabel($data->status);
				},
				'filter'    => Status::getStatus(),
			],
			[
				'attribute' => 'created_at',
				'format'    => ['date', 'php:d M Y']
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
