<?php

use common\models\JobClassification;
use common\models\JobLocation;
use common\models\JobType;
use common\models\Status;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\Job $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="job-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => TRUE]) ?>

	<?= $form->field($model, 'description')->textarea(['rows' => 6, 'id' => 'description']) ?>

	<?= $form->field($model, 'type_id')
	         ->dropDownList(ArrayHelper::map(JobType::find()->all(), 'id', 'name'),
		         ['prompt' => 'Type']) ?>

	<?= $form->field($model, 'classification_id')
	         ->dropDownList(ArrayHelper::map(JobClassification::find()->all(), 'id', 'name'),
		         ['prompt' => 'Classification']) ?>

	<?= $form->field($model, 'location_id')
	         ->dropDownList(ArrayHelper::map(JobLocation::find()->all(), 'id', 'name'),
		         ['prompt' => 'Location']) ?>

	<?= $form->field($model, 'salary')->textInput() ?>

	<?= $form->field($model, 'working_hours')->textInput(['maxlength' => TRUE]) ?>

	<?= $form->field($model, 'status')->dropDownList(Status::getStatus(), ['prompt' => 'Status']) ?>

    <div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

	<?php ActiveForm::end(); ?>

</div>
<?php
$script = <<< JS
    CKEDITOR.replace( 'description' );
JS;
$this->registerJs($script);
?>
