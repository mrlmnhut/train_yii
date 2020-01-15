<?php

use common\models\Status;
use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\JobLocation $model
 */

$this->title                   = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Job Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="job-location-view">

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
			'name',
			'description',
			[
				'attribute' => 'status',
				'format'    => 'raw',
				'value'     => function ($data){
					/**
					 * @var common\models\JobLocation $data
					 */
					return Status::getStatusLabel($data->status);
				},
			],
			[
				'attribute' => 'created_at',
				'value'     => date('d M Y H:i:s', $model->created_at)
			],
			[
				'attribute' => 'created_by',
				'value'     => $model->createdBy->username
			],
			[
				'attribute' => 'updated_at',
				'value'     => date('d M Y H:i:s', $model->updated_at)
			],
			[
				'attribute' => 'updated_by',
				'value'     => $model->updatedBy->username
			],
		],
	]) ?>

</div>
