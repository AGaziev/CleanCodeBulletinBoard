<?php
include_once 'Bulletin.php';
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

function getAdsFromDB(string $category): mysqli_result
{
    global $db;
    $query = "select * from boardAD where category = '{$category}'";
    return $db->query($query);
}

function addUserToDB(string $email, string $hashedPass)
{
    global $db;
    $query = "insert into user(email,password) values('{$email}', '{$hashedPass}')";
    $db->query($query);
}

function addNewBulletinToDB(BulletinInfo $bulletin)
{
    global $db;
    $query = "insert into boardAD(email,heading,text,category) values('{$bulletin->getEmail()}',
                                                                      '{$bulletin->getHeading()}',
                                                                      '{$bulletin->getText()}',
                                                                      '{$bulletin->getCategory()}')";
    $db->query($query);
}