<?php

namespace frontend\tests\unit\models;

use Codeception\Test\Unit;
use common\fixtures\UserFixture;
use common\models\User;
use frontend\models\VerifyEmailForm;

/**
 * Class VerifyEmailFormTest
 *
 * @package frontend\tests\unit\models
 */
class VerifyEmailFormTest extends Unit{

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

	public function testVerifyWrongToken(){
		$this->tester->expectException('\yii\base\InvalidArgumentException', function (){
			new VerifyEmailForm('');
		});

		$this->tester->expectException('\yii\base\InvalidArgumentException', function (){
			new VerifyEmailForm('notexistingtoken_1391882543');
		});
	}

	public function testAlreadyActivatedToken(){
		$this->tester->expectException('\yii\base\InvalidArgumentException', function (){
			new VerifyEmailForm('already_used_token_1548675330');
		});
	}

	public function testVerifyCorrectToken(){
		$model = new VerifyEmailForm('4ch0qbfhvWwkcuWqjN8SWRq72SOw1KYT_1548675330');
		$user  = $model->verifyEmail();
		expect($user)->isInstanceOf('common\models\User');

		expect($user->username)->equals('test.test');
		expect($user->email)->equals('test@mail.com');
		expect($user->status)->equals(User::STATUS_ACTIVE);
		expect($user->validatePassword('Test1234'))->true();
	}
}
