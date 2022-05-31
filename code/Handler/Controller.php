<?php

namespace Controller;

use Controller\BoardController;
use Object\Bulletin;

class RequestController
{
    public static function addNewAd()
    {
        BoardController::addToBoard(new Bulletin($_SESSION));
    }

}