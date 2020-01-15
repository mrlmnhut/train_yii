<?php

use common\models\Nationality;
use common\models\Status;
use common\models\User;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\NationalitySearch $search_model
 * @var yii\data\ActiveDataProvider $data_provider
 */

$this->title                   = 'Nationalities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nationality-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		<?= Html::a('Create Nationality', ['create'], ['class' => 'btn btn-success']) ?>
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
					 * @var common\models\Nationality $data
					 */
					return Status::getStatusLabel($data->status);
				},
				'filter'    => Status::getStatus(),
			],
			[
				'attribute' => 'created_at',
				'format'    => ['date', 'php:d M Y'],
				'filter'    => Html::activeDropDownList($search_model, 'created_at',
					Nationality::getCreatedAt(),
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
