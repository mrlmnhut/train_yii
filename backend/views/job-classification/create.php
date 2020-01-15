<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\JobClassification $model
 */

$this->title                   = 'Create Job Classification';
$this->params['breadcrumbs'][] = ['label' => 'Job Classifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-classification-create">

    <h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
