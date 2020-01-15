<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;
use Yii;

/**
 * Class HomeCest
 *
 * @package frontend\tests\functional
 */
class HomeCest{

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkOpen(FunctionalTester $I){
		$I->amOnPage(Yii::$app->homeUrl);
		$I->see('My Application');
		$I->seeLink('About');
		$I->click('About');
		$I->see('This is the About page.');
	}
}