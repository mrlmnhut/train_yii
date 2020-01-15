<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

/**
 * Class AboutCest
 *
 * @package frontend\tests\functional
 */
class AboutCest{

	/**
	 * @param \frontend\tests\FunctionalTester $I
	 */
	public function checkAbout(FunctionalTester $I){
		$I->amOnRoute('site/about');
		$I->see('About', 'h1');
	}
}
