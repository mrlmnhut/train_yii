<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\JobClassification $model
 */

$this->title                   = 'Update Job Classification: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Job Classifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-classification-update">

    <h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
