<?php

$db = new mysqli('db', 'root', 'qwerta123', 'bulletinDB');

if (mysqli_connect_errno()) {
    printf('Подключение к серверу MySQL невозможно. Код ошибки ', mysqli_connect_error());
    exit;
}

function getUsersFromDB(): mysqli_result
{
    global $db;
    $query = 'select * from user';
    return $db->query($query);
}

function getAdsFromDB(): mysqli_result
{

}

function addUserToDB(string $email, string $hashedPass)
{
    global $db;
    $query = "insert into user(email,password) values('{$email}', '{$hashedPass}')";
    $db->query($query);
}