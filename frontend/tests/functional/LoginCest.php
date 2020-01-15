<?php

namespace frontend\tests\functional;

use common\fixtures\UserFixture;
use frontend\tests\FunctionalTester;

/**
 * Class LoginCest
 *
 * @package frontend\tests\functional
 */
class LoginCest{

	/**
	 * Load fixtures before db transaction begin
	 * Called in _before()
	 *
	 * @return array
	 * @see \Codeception\Module\Yii2::loadFixtures()
	 * @see \Codeception\Module\Yii2::_before()
	 */
	public function _fixtures(){
		return [
			'user' => [
				'class'    => UserFixture::class,
				'dataFile' => codecept_data_dir() . 'login_data.php',
			],
		];
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function _before(FunctionalTester $I){
		$I->amOnRoute('site/login');
	}

	/**
	 * @param $login
	 * @param $password
	 *
	 * @return array
	 */
	protected function formParams($login, $password){
		return [
			'LoginForm[username]' => $login,
			'LoginForm[password]' => $password,
		];
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkEmpty(FunctionalTester $I){
		$I->submitForm('#login-form', $this->formParams('', ''));
		$I->seeValidationError('Username cannot be blank.');
		$I->seeValidationError('Password cannot be blank.');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkWrongPassword(FunctionalTester $I){
		$I->submitForm('#login-form', $this->formParams('admin', 'wrong'));
		$I->seeValidationError('Incorrect username or password.');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkInactiveAccount(FunctionalTester $I){
		$I->submitForm('#login-form', $this->formParams('test.test', 'Test1234'));
		$I->seeValidationError('Incorrect username or password');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkValidLogin(FunctionalTester $I){
		$I->submitForm('#login-form', $this->formParams('erau', 'password_0'));
		$I->see('Logout (erau)', 'form button[type=submit]');
		$I->dontSeeLink('Login');
		$I->dontSeeLink('Signup');
	}
}
