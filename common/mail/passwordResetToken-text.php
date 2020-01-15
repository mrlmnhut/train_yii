<?php

/* @var yii\web\View $this */
/* @var common\models\User $user */

$reset_link = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Hello <?= $user->username ?>,

Follow the link below to reset your password:

<?= $reset_link ?>
