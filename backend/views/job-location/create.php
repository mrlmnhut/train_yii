<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\JobLocation $model
 */

$this->title                   = 'Create Job Location';
$this->params['breadcrumbs'][] = ['label' => 'Job Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-location-create">

    <h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
