<?php

/**
 * @var yii\web\View $this
 * @var yii\bootstrap\ActiveForm $form
 * @var \common\models\LoginForm $model
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title                   = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

			<?= $form->field($model, 'username')->textInput(['autofocus' => TRUE]) ?>

			<?= $form->field($model, 'password')->passwordInput() ?>

	        <?= $form->field($model, 'remember_me')->checkbox() ?>

            <div class="form-group">
				<?= Html::submitButton('Login',
					['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
				<?= Html::a('Signup', ['../site/signup'],
					['class' => 'btn btn-primary']) ?>
            </div>

			<?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
