<?php

namespace Cyberpuerta\TempModule\Controller;

use OxidEsales\Eshop\Application\Controller\FrontendController;

class TemporaryController extends FrontendController
{
    protected $_sThisTemplate = 'temporaryTemplate.tpl';

    public function helloWorld()
    {
        echo "Hello world!";
    }
}