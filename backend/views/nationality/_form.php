<?php

use common\models\Status;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\Nationality $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="nationality-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => TRUE]) ?>

	<?= $form->field($model, 'description')->textInput(['maxlength' => TRUE]) ?>

	<?= $form->field($model, 'status')->dropDownList(Status::getStatus(), ['prompt' => 'Status']) ?>

    <div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

	<?php ActiveForm::end(); ?>

</div>
