<?php

use common\models\Status;
use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\JobApplication $model
 */

$this->title                   = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Job Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);

$title = '';
if (isset($model->job->title)){
	$title = $model->job->title;
}

?>
<div class="job-application-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
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
			[
				'attribute' => 'job_id',
				'value'     => $title
			],
			'name',
			[
				'attribute' => 'nationality_id',
				'value'     => $model->nationality->name
			],
			'contact',
			'email:email',
			'address',
			'postal_code',
			'current_salary',
			'expected_salary',
			[
				'attribute' => 'resume',
				'format'    => 'html',
				'value'     =>
					Html::a('View', ['/uploads/' . $model->resume, 'id' => $model->id],
						['class' => 'btn btn-primary']) . " " . Html::a('Download file',
						['job-application/download', 'id' => $model->id],
						['class' => 'btn btn-primary'])
			],
			[
				'attribute' => 'status',
				'format'    => 'raw',
				'value'     => function ($data){
					/**
					 * @var common\models\JobApplication $data
					 */
					return Status::getStatusLabel($data->status);
				},
			],
			[
				'attribute' => 'created_at',
				'value'     => date('d M Y H:i:s', $model->created_at)
			],
		],
	]) ?>

</div>
