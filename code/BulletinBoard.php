<?php
session_start();

$bulletinDB = new mysqli('db', 'root', 'qwerta123', 'bulletinDB');

if (mysqli_connect_errno()) {
    printf('Подключение к серверу MySQL невозможно. Код ошибки ', mysqli_connect_error());
    exit;
}
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
<form method="post">
    <label>
        Your e-mail:<br>
        <input type="email" name="emailNew"
               size="30" maxlength="30" required><br>
        Category:<br>
        <select name="categoryNew" required>
            <option>Sport</option>
            <option>IT</option>
            <option>Auto</option>
            <option>Science</option>
            <option>Animals</option>
        </select><br>
        Heading:<br>
        <input type="text" name="headingNew" value="" size="30" maxlength="30" required><br>
        Text:<br>
        <textarea cols="50" rows="10" name="textNew" placeholder="Enter text of your ad" required></textarea>
        <br><br>
        <input type="submit" name="PostNew" value="POST"> <input type="reset" value="ERASE"><br><br>
    </label>
</form>
<form method="post">
    Choose category to show:
    <label>
        <select name="categorySelect" required>
            <option>Sport</option>
            <option>IT</option>
            <option>Auto</option>
            <option>Science</option>
            <option>Animals</option>
        </select>
    </label><br>
    <input type="submit" name="start" value="SHOW">
</form>
</body>
</html>
<?php
if ($_POST['start']) {
    $_SESSION['categoryToShow'] = $_POST['categorySelect'];
}
if ($_POST['PostNew']) {
    $bulletinDB->query("INSERT INTO boardAD(email,heading,text,category) VALUES('{$_POST["emailNew"]}', '{$_POST["headingNew"]}', '{$_POST["textNew"]}', '{$_POST["categoryNew"]}')");

}
?>
<body>
<form>
    <label>
        <table border="1" width="60%">
            <tbody>
            <?php

            $ads = $bulletinDB->query("SELECT * FROM boardAD WHERE category = '{$_SESSION['categoryToShow']}'");
            while ($row = $ads->fetch_assoc()) {
                echo <<<HEREDOC
                    <tr>
                        <td rowspan="3">{$row['created']}</td>
                        <th bgcolor="#deb887">Автор: {$row['email']}</th>
                    </tr>
                    <tr>
                        <th>{$row['heading']}</th>
                    </tr>
                    <tr>
                        <td>{$row['text']}</td>
                    </tr>
                    HEREDOC;
            }
            ?>
            </tbody>
        </table>
    </label>
</form>
</body>
