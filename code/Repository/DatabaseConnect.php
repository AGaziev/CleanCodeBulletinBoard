<?php

namespace Repository;

use Config\Config;
use mysqli;

class Database
{
    private static mysqli $database;

    public function __construct(Config $config)
    {
        $this->connectToDataBase($config);
    }

    public static function connectToDatabase(Config $config): mysqli
    {
        self::$database = mysqli_init();
        $dbConnect = self::$database->real_connect($config->getHost(), $config->getUsername(),
            $config->getPassword(), $config->getDatabaseName());
        $dbChangeEncoding = mysqli_set_charset(self::$database, "utf8mb4");
        $error = mysqli_errno(self::$database) . ":" . mysqli_error(self::$database);
        if (!$dbConnect || !$dbChangeEncoding) {
            trigger_error($error);
        }
        return self::$database;
    }

    /**
     * @return mysqli
     */
    public static function getDatabase(): mysqli
    {
        return self::$database;
    }
}
