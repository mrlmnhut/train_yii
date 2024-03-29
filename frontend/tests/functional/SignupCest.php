<?php /** @noinspection PhpPropertyNamingConventionInspection */

namespace frontend\tests\functional;

use common\models\User;
use frontend\tests\FunctionalTester;

/**
 * Class SignupCest
 *
 * @package frontend\tests\functional
 */
class SignupCest{

	protected $formId = '#form-signup';


	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function _before(FunctionalTester $I){
		$I->amOnRoute('site/signup');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function signupWithEmptyFields(FunctionalTester $I){
		$I->see('Signup', 'h1');
		$I->see('Please fill out the following fields to signup:');
		$I->submitForm($this->formId, []);
		$I->seeValidationError('Username cannot be blank.');
		$I->seeValidationError('Email cannot be blank.');
		$I->seeValidationError('Password cannot be blank.');

	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function signupWithWrongEmail(FunctionalTester $I){
		$I->submitForm(
			$this->formId, [
				'SignupForm[username]' => 'tester',
				'SignupForm[email]'    => 'ttttt',
				'SignupForm[password]' => 'tester_password',
			]
		);
		$I->dontSee('Username cannot be blank.', '.help-block');
		$I->dontSee('Password cannot be blank.', '.help-block');
		$I->see('Email is not a valid email address.', '.help-block');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function signupSuccessfully(FunctionalTester $I){
		$I->submitForm($this->formId, [
			'SignupForm[username]' => 'tester',
			'SignupForm[email]'    => 'tester.email@example.com',
			'SignupForm[password]' => 'tester_password',
		]);

		$I->seeRecord('common\models\User', [
			'username' => 'tester',
			'email'    => 'tester.email@example.com',
			'status'   => User::STATUS_INACTIVE
		]);

		$I->seeEmailIsSent();
		$I->see('Thank you for registration. Please check your inbox for verification email.');
	}
}
