<?php
session_start();
include 'controllers/userController.php'
?>
<script type="text" src="controllers/userController.php"></script>
<body>
<label>
    <b>Добро пожаловать на доску объявлений, <?php showUserInfo(); ?></b>
</label>
<form method="POST">
    <label>
        Email
        <p>
            <input type="email" name="email">
        </p>
        Password
        <p>
            <input type="password" name="password">
        </p>
        <input type="submit" name='login' value="Войти">
        <input type="submit" name='logout' value="Выйти">
    </label>
</form>
</body>
<?php
switch(true)
{
    case isset($_POST['login']):
        login();
    break;
    case isset($_POST['logout']):
        logout();
    break;
}
?>