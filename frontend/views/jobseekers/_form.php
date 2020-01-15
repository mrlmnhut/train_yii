<?php

use common\models\Nationality;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\JobApplication $model
 * @var yii\widgets\ActiveForm $form
 * @var $job_apply
 * @var $id
 */

?>
<?php
$id = '';
if (Yii::$app->request->get()){
	$id = Yii::$app->request->get('id');
} ?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
                                 'action'  => Url::toRoute(['/jobseekers/deposit-resume']) . '?id=' . $id,]) ?>

<?php if (Yii::$app->session->getFlash('success')){ ?>
    <div class="alert alert-success" role="alert">
        Successfully!
    </div>
<?php } ?>
<?php if (Yii::$app->session->getFlash('error')){ ?>
    <div class="alert alert-danger" role="alert">
        Failed!
		<?php foreach (Yii::$app->session->getFlash('error') as $err){ ?>
            <br><?= $err['0'] ?><?php } ?>
    </div>
<?php } ?>
<label for="name" id="is-required">is required</label>
<?= $form->field($job_apply, 'name')
         ->textInput(['maxlength' => TRUE])
         ->label('Name', ['class' => 'required']) ?>

<?= $form->field($job_apply, 'nationality_id')
         ->dropDownList(ArrayHelper::map(Nationality::find()->all(), 'id', 'name'),
	         ['prompt' => 'Nationality', 'class' => 'select2'])
         ->label('Nationality', ['class' => 'required']) ?>

<?= $form->field($job_apply, 'contact')
         ->textInput(['maxlength' => TRUE])
         ->label('Contact', ['class' => 'required']) ?>

<?= $form->field($job_apply, 'email', ['enableAjaxValidation' => TRUE])
         ->textInput(['maxlength' => TRUE])
         ->label('Email', ['class' => 'required']) ?>

<?= $form->field($job_apply, 'address')
         ->textInput(['maxlength' => TRUE])
         ->label('Address', ['class' => 'required']) ?>

<?= $form->field($job_apply, 'postal_code')
         ->textInput(['maxlength' => TRUE])
         ->label('Postal Code', ['class' => 'required']) ?>

<?= $form->field($job_apply, 'current_salary')
         ->textInput(['maxlength' => TRUE])
         ->label('Current Salary', ['class' => 'required']) ?>

<?= $form->field($job_apply, 'expected_salary')
         ->textInput(['maxlength' => TRUE])
         ->label('Expected Salary', ['class' => 'required']) ?>

<hr>
<div class="form-attach">
    <div class="form-group">
        <div class="custom-file">
			<?= $form->field($job_apply, 'file', [
				'parts'    =>
					[
						'{icon}'              => '<span>MS Word document preferred, max file size 5MB.</span>',
						'{custom-file-label}' => '<label class="custom-file-label" for="jobapplication-file" id="label-file">File...</label>',
					],
				'template' => "{label}\n{input}{custom-file-label}\n{error}\n{icon}"
			])
			         ->fileInput(['class' => 'form-control'])
			         ->label('Attach Resume', ['class' => 'required']) ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary form-control">Submit
        <i class="las la-arrow-right"></i></button>
</div>

<?php ActiveForm::end(); ?>
