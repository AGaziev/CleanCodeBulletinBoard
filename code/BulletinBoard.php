<?php
session_start();
require_once "../vendor/autoload.php";

$client = new Google_Client();
$client->setApplicationName('WEB Lab 4');
$client->setScopes(Google\Service\Sheets::SPREADSHEETS);
$client->setDeveloperKey("AIzaSyAA52f3qn-QU6WzJR9X_1TETqPkq8J2fWk");
putenv('GOOGLE_APPLICATION_CREDENTIALS=../credentials.json');
$client->useApplicationDefaultCredentials();

$service = new Google\Service\Sheets($client);
$sheetId = '1RAs9jimcz3mtS-77unap8ybKAwLp1ABVpeHf8hbreeM';
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
//////////////////////////NO USE
function DetectCopiesOfHeaders($name, $category): string
{
    $copies = 0;
    foreach (scandir("$category") as $file) {
        if (preg_match('/^' . $name . '[\(\d\)]*\.txt/', $file)) //REGEX FOR COPIES OF FILES LIKE name.txt name(1).txt name(2).txt
            $copies++;
    }
    if ($copies == 0)
        return "";
    return "($copies)";
}

if ($_POST['start']) {
    $_SESSION['categoryToShow'] = $_POST['categorySelect'];
}
if ($_POST['PostNew']) {
    ///////////////////////////FILE KEEPING SYSTEM/////////////////////////////////
    //$copyPostfix = DetectCopiesOfHeaders($_POST['headingNew'], $_POST['categoryNew']);
    //$newPost = fopen("{$_POST['categoryNew']}/{$_POST['headingNew']}$copyPostfix.txt", 'w');
    //fputs($newPost, "{{$_POST['emailNew']}}\n{{{$_POST['headingNew']}}}\n{$_POST['textNew']}");
    //fclose($newPost);
    ///////////////////////GOOGLE SHEET KEEPING SYSTEM/////////////////////////////
    
}
?>
<body>
<form>
    <label>
        <table>
            <tbody>
            <?php
            foreach (scandir("{$_SESSION['categoryToShow']}") as $file) {
                if (preg_match('/.+\.txt$/', $file)) { //REGEX FOR FILES LIKE text.txt
                    $post = [];
                    preg_match('/\{(.+@.+)\}[\n]\{\{(.+)\}\}[\n](.+)/s', //regex for pattern {author} \n {header} \n {text}
                        file_get_contents("{$_SESSION['categoryToShow']}/$file"),
                        $post);
                    echo <<<HEREDOC
                    <tr>
                        <th>Автор:$post[1]</th>
                    </tr>
                    <tr>
                        <th>$post[2]</th>
                    </tr>
                    <tr>
                        <td>$post[3]</td>
                    </tr>
                    HEREDOC;

                }
            }
            ?>
            </tbody>
        </table>
    </label>
</form>
</body>
