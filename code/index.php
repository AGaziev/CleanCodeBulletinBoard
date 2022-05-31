<?php
session_start();
require_once('Model/Render.php');

use Render\Render;

$render = new Render();

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
<form method="POST">
    <label>
        Email:<br>
        <input type="email" name="email" value="" size="30" maxlength="30" required><br>
        Category:<br>
        <select name="categoryNew" required>
            <?php echo html_entity_decode($render->selector()) ?>
        </select><br>
        Heading:<br>
        <input type="text" name="headingNew" value="" size="30" maxlength="30" required><br>
        Text:<br>
        <textarea cols="50" rows="10" name="textNew" placeholder="Enter text of your ad" required></textarea>
        <br><br>
        <input type="submit" name="PostNew" value="POST"> <input type="reset" value="ERASE"><br><br>
    </label>
</form>
<form method="GET">
    Choose category to show:
    <label>
        <select name="categorySelect" required>
            <?php echo html_entity_decode($render->selector()) ?>
        </select>
    </label><br>
    <input type="submit" name="start" value="SHOW">
</form>
</body>
</html>
<?php
$render->handler();
?>

