<?php

namespace frontend\tests\unit\models;

use Codeception\Test\Unit;
use common\fixtures\UserFixture as UserFixture;
use common\models\User;
use frontend\models\PasswordResetRequestForm;
use Yii;

/**
 * Class PasswordResetRequestFormTest
 *
 * @package frontend\tests\unit\models
 */
class PasswordResetRequestFormTest extends Unit{

	/**
	 * @var \frontend\tests\UnitTester
	 */
	protected $tester;


	public function _before(){
		$this->tester->haveFixtures([
			'user' => [
				'class'    => UserFixture::class,
				'dataFile' => codecept_data_dir() . 'user.php'
			]
		]);
	}

	public function testSendMessageWithWrongEmailAddress(){
		$model        = new PasswordResetRequestForm();
		$model->email = 'not-existing-email@example.com';
		expect_not($model->sendEmail());
	}

	public function testNotSendEmailsToInactiveUser(){
		$user         = $this->tester->grabFixture('user', 1);
		$model        = new PasswordResetRequestForm();
		$model->email = $user['email'];
		expect_not($model->sendEmail());
	}

	public function testSendEmailSuccessfully(){
		$user_fixture = $this->tester->grabFixture('user', 0);

		$model        = new PasswordResetRequestForm();
		$model->email = $user_fixture['email'];
		$user         = User::findOne(['password_reset_token' => $user_fixture['password_reset_token']]);

		expect_that($model->sendEmail());
		expect_that($user->password_reset_token);

		$email_message = $this->tester->grabLastSentEmail();
		expect('valid email is sent', $email_message)->isInstanceOf('yii\mail\MessageInterface');
		expect($email_message->getTo())->hasKey($model->email);
		expect($email_message->getFrom())->hasKey(Yii::$app->params['supportEmail']);
	}
}
