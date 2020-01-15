<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\JobType $model
 */

$this->title                   = 'Update Job Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Job Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
