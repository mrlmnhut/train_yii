<?php

use common\models\Status;
use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\Job $model
 */

$this->title                   = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="job-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data'  => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method'  => 'post',
			],
		]) ?>
    </p>

	<?= DetailView::widget([
		'model'      => $model,
		'attributes' => [
			'id',
			'title',
			'description:html',
			[
				'attribute' => 'type_id',
				'value'     => $model->type->name
			],
			[
				'attribute' => 'classification_id',
				'value'     => $model->classification->name
			],
			[
				'attribute' => 'location_id',
				'value'     => $model->location->name
			],
			'salary',
			'working_hours',
			[
				'attribute' => 'status',
				'format'    => 'raw',
				'value'     => function ($data){
					/**
					 * @var common\models\Job $data
					 */
					return Status::getStatusLabel($data->status);
				},
			],
			[
				'attribute' => 'created_at',
				'format'    => ['date', 'php:d M Y h:m:s']
			],
			[
				'attribute' => 'created_by',
				'value'     => $model->createdBy->username
			],
			[
				'attribute' => 'updated_at',
				'format'    => ['date', 'php:d M Y h:m:s']
			],
			[
				'attribute' => 'updated_by',
				'value'     => $model->updatedBy->username
			],
		],
	]) ?>

</div>
