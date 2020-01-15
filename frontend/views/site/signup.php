<?php

/* @var yii\web\View $this */
/* @var yii\bootstrap\ActiveForm $form */

/* @var \frontend\models\SignupForm $model */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title                   = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="body">
    <div class="container">
        <div class="site-signup">
			<?php if (Yii::$app->session->getFlash('success')){ ?>
                <div class="alert alert-success" role="alert">
					<?= Yii::$app->session->getFlash('success') ?>
                </div>
			<?php } ?>
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Please fill out the following fields to signup:</p>

            <div class="row">
                <div class="col-lg-5">
					<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

					<?= $form->field($model, 'username')->textInput(['autofocus' => TRUE]) ?>

					<?= $form->field($model, 'email') ?>

					<?= $form->field($model, 'password')->passwordInput() ?>

                    <div class="form-group">
						<?= Html::submitButton('Signup',
							['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
						<?= Html::a('Login', ['admin/site/login'],
							['class' => 'btn btn-primary']) ?>
                    </div>

					<?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
