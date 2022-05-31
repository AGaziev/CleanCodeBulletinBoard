<?php

namespace Controller;

use Object\Bulletin;
use mysqli;
use Repository\Database;
use Repository\QueryRepository;
use Config\Config;

class BoardController
{
    private static mysqli $database;

    public function __construct(Config $settings)
    {
        self::$database = Database::getDatabase($settings);
    }

    public static function addToBoard(Bulletin $info)
    {
        self::$database->query(QueryRepository::addBulletin($info));
    }

    public static function getAdsFromCategory(string $category)
    {
        return self::$database->query(QueryRepository::getBulletinList())->fetch_all(MYSQLI_ASSOC);
    }
}