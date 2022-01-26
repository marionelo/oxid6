<?php

class FirstCest
{
    // tests
    public function frontPageWorks(AcceptanceTester $I)
    {
        $homePage = new \OxidEsales\Codeception\Page\Home($I);
        $I->amOnPage($homePage->URL);
        // $I->see(\OxidEsales\Codeception\Module\Translation\Translator::translate("HOME"));
        $I->see("Our brands");
    }
}
