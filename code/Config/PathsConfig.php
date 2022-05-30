<?php

namespace Configure;

class PathSettings
{
    private static array $pagesPaths;

    public function __construct()
    {
        self::$pagesPaths=[
            'registration' => 'View/Registration.php',
            'login' => 'View/index.php',
            'bulletinBoard' => 'View/BulletinBoard.php'
        ];
    }
}