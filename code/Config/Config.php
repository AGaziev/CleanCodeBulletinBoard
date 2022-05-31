<?php

namespace Config;

use Config\DatabaseSettingsRepository;

class Config
{
    private static array $categories;
    private DatabaseSettingsRepository $databaseConnectionSetting;

    public function __construct()
    {
        $this->databaseConnectionSetting = new DatabaseSettingsRepository(
            'db', 'root', 'qwerta123', 'web');
    }

    public static function getCategoriesList(): array
    {
        return self::$categories;
    }

    public function getDbConnectionItems(): DatabaseSettingsRepository
    {
        return $this->databaseConnectionSetting;
    }
}