<?php

namespace UserControl;

//use Getting\UsersInfo;
use Configure\generalConfig;
use mysqli;
use Repository\Database;
use Object\User;

class Registrar
{
    private static string $queryAdd;
    private static mysqli $database;

    public function __construct()
    {
        self::$database = Database::getDatabase();
    }

    public function addUser(User $user)
    {
        if ($this->isUserRegistered())
        {

        }
    }

    private function isUserRegistered($email)
    {
        if ()
        return
    }

    private function getUsers()
    {
        $query = 'select * from user';
        return self::$database->query($query)->fetch_all();
    }

    public function __destruct()
    {
        self::$database->close();
    }


}