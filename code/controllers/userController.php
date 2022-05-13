<?php

include "DBController.php";

////////////////////////////AUTHORIZATION//////////////////////////////////
function login()
{
    if (userAuthorization($_POST['email'], $_POST['password']) and checkInput()) {
        $_SESSION['email'] = $_POST['email'];
        echo('Успешный вход <br><a href="BulletinBoard.php">перейти на доску объявлений</a>');
    } else {
        echo('Пользователь с таким email и паролем не зарегистрирован');
    }
}

function logout()
{
    unset($_SESSION['email']);
}

function userAuthorization(string $email, string $userPassword): bool
{
    $hashedPass = getUserPass($email);
    if (!$hashedPass) {
        return False;
    } else {
        return password_verify($userPassword, $hashedPass);
    }
}

function getUserPass(string $email): string|bool
{
    $users = getUsersFromDB()->fetch_all(MYSQLI_ASSOC);
    foreach ($users as $user) {
        if ($user['email'] == $email)
            return $user['password'];
    }
    return False;
}

///////////////////////////REGISTRATION/////////////////////////////////
function register()
{
    if (isUserRegistered($_POST['email']))
        echo('Вы уже зарегестрированы');
    else {
        registerUser($_POST['email'], $_POST['password']);
    }
}

function registerUser(string $email, string $password)
{
    $hashedPass = password_hash($password, PASSWORD_DEFAULT);
    addUserToDB($email, $hashedPass);
}

function isUserRegistered(string $email): bool
{
    $users = getUsersFromDB()->fetch_all(MYSQLI_ASSOC);
    foreach ($users as $user) {
        if ($user['email'] == $email)
            return True;
    }
    return False;
}

/////////////////////////////////////////////////////////////////////
function showUserInfo()
{
    if (isset($_SESSION['email']))
        echo($_SESSION['email']);
    else
        echo('авторизируйтесь или если у вас нет аккаунта <a href="Registration.php">зарегистрируйтесь</a></b>');

}

function checkInput():bool
{
    if (!isset($_POST['email'],$_POST['password'])) {
        return False;
    }else
        return True;
}

function getCurrentUserEmail()
{
    if (isset($_SESSION['email']))
        return $_SESSION['email'];
    else
        return 'GUEST';
}

