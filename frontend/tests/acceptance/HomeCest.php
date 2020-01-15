<?php

namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

/**
 * Class HomeCest
 *
 * @package frontend\tests\acceptance
 */
class HomeCest{

	/**
	 * @param \frontend\tests\AcceptanceTester $I
	 */
	public function checkHome(AcceptanceTester $I){
		$I->amOnPage(Url::toRoute('/site/index'));
		$I->see('My Application');

		$I->seeLink('About');
		$I->click('About');
		$I->wait(2); // wait for page to be opened

		$I->see('This is the About page.');
	}
}
