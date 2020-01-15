<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Nationality $model
 */

$this->title                   = 'Create Nationality';
$this->params['breadcrumbs'][] = ['label' => 'Nationalities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nationality-create">

    <h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
