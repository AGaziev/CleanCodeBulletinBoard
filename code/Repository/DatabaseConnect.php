<?php

namespace Repository;

use Configure\generalConfig;
use mysqli;

class Database
{
    private static mysqli $database;

    public function __construct()
    {
        $this -> connectToDataBase(new generalConfig());
    }

    public static function connectToDatabase(generalConfig $config): mysqli
    {
        $settings = $config->getDbConnect();
        self::$database = mysqli_init();
        $dbConnect = self::$database->real_connect($settings->getHost(), $settings->getUsername(),
            $settings->getPassword(), $settings->getDatabaseName());
        $dbChangeEncoding = mysqli_set_charset(self::$database, "utf8mb4");
        $error = mysqli_errno(self::$database). ":" .mysqli_error(self::$database);
        if(!$dbConnect || !$dbChangeEncoding)
        {
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
