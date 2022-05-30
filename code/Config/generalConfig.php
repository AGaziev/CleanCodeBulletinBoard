<?php

namespace Configure;

class generalConfig
{
    private static PathSettings $paths;
    private static DatabaseSettings $dbConnect;

    public function __construct()
    {
        self::$paths = new PathSettings();
        self::$dbConnect = new DatabaseSettings('db', 'root', 'qwerta123', 'bulletinDB');
    }

    /**
     * @return DatabaseSettings
     * @return PathSettings
     */
    public function getDbConnect(): DatabaseSettings
    {
        return $this->dbConnect;
    }

    public function getPaths(): PathSettings
    {
        return $this->paths;
    }

}