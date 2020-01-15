<?php /** @noinspection PhpPropertyNamingConventionInspection */

namespace frontend\tests\functional;

use common\fixtures\UserFixture;
use common\models\User;
use frontend\tests\FunctionalTester;

/**
 * Class ResendVerificationEmailCest
 *
 * @package frontend\tests\functional
 */
class ResendVerificationEmailCest{

	protected $formId = '#resend-verification-email-form';


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
				'dataFile' => codecept_data_dir() . 'user.php',
			],
		];
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function _before(FunctionalTester $I){
		$I->amOnRoute('/site/resend-verification-email');
	}

	/**
	 * @param $email
	 *
	 * @return array
	 */
	protected function formParams($email){
		return [
			'ResendVerificationEmailForm[email]' => $email
		];
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkPage(FunctionalTester $I){
		$I->see('Resend verification email', 'h1');
		$I->see('Please fill out your email. A verification email will be sent there.');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkEmptyField(FunctionalTester $I){
		$I->submitForm($this->formId, $this->formParams(''));
		$I->seeValidationError('Email cannot be blank.');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkWrongEmailFormat(FunctionalTester $I){
		$I->submitForm($this->formId, $this->formParams('abcd.com'));
		$I->seeValidationError('Email is not a valid email address.');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkWrongEmail(FunctionalTester $I){
		$I->submitForm($this->formId, $this->formParams('wrong@email.com'));
		$I->seeValidationError('There is no user with this email address.');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkAlreadyVerifiedEmail(FunctionalTester $I){
		$I->submitForm($this->formId, $this->formParams('test2@mail.com'));
		$I->seeValidationError('There is no user with this email address.');
	}

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkSendSuccessfully(FunctionalTester $I){
		$I->submitForm($this->formId, $this->formParams('test@mail.com'));
		$I->canSeeEmailIsSent();
		$I->seeRecord('common\models\User', [
			'email'    => 'test@mail.com',
			'username' => 'test.test',
			'status'   => User::STATUS_INACTIVE
		]);
		$I->see('Check your email for further instructions.');
	}
}
