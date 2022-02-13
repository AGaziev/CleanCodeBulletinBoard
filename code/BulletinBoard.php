<?php
session_start()
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
            <input type="text" name="emailNew"
                   value="<?php
                   if (isset($_SESSION["userEmail"]))
                       echo $_SESSION["userEmail"];
                   else
                       echo ""; ?>"
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
    <form>
        <label>
            Choose category to show:
            <select name="categorySelect">
                <option>Sport</option>
                <option>IT</option>
                <option>Auto</option>
                <option>Science</option>
                <option>Animals</option>
            </select><br>
        </label>
    </form>
    </body>
    </html>

