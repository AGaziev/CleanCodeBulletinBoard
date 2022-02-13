<?php
session_start();
echo "User Info:<br>
NAME: {$_SESSION['name']}<br>
SURNAME: {$_SESSION['surname']}<br>
AGE: {$_SESSION['age']}<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php">НАЗАД</a>
</body>
</html>