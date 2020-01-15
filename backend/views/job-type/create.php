<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\JobType $model
 */

$this->title                   = 'Create Job Type';
$this->params['breadcrumbs'][] = ['label' => 'Job Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
