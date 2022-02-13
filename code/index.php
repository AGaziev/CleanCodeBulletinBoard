<?php
session_start();
/*
 * 1.Регулярные выражения.Напишите регулярку, которая найдет строки
 * 'abba', 'adca','abea' по шаблону:буква 'a',двалюбыхсимвола,буква 'b'.
 * Пример строки:$str='ahb acb aeb aeeb adcb axeb'.
*/
echo '1.Регулярные выражения<br>';
$regexp = '/a.{2}b/';
$str = 'ahb acb aeb aeeb adcb axeb';
echo $str . '<br>';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
echo print_r($matches, 1) . '<br>';

/*Дана строка с целыми числами 'a1b2c3'.
 * С помощью регулярки преобразуйте строку так, чтобы вместо этихчисел стояли их кубы.
*/
$regexp = '/\d+/';
$str = 'a1b2c3';
echo $str . ' -> ';
$result = preg_replace_callback(
    $regexp,
    function ($matches) {
        foreach ($matches as &$item) {
            $item = $item ** 2;
        }
        return $matches[0];
    },
    $str
);
echo $result . '<br>';


echo "2.Форма. Сессии и Куки<br>";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="US-ASCII">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регулярные выражение и работа с файлами</title>
</head>
<body>
<form method="POST">
    <label>
<textarea name="textToParse"
          placeholder="Введите текст в котором необходимо узнать количество слов и символов"
          rows="5" cols="40"></textarea>
    </label>
    <input type="submit" name="getWordsAndSyms" value="Обработать текст">
</form>
</body>
</html>
<?php
if ($_POST['getWordsAndSyms']) {
    if ($_POST['textToParse']) {
        $_SESSION['textInfo'] = str_word_count($_POST['textToParse'],
                0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя') . ' слов<br>';
        // чтобы русские символы тоже считывал
        $_SESSION['textInfo'] .= strlen($_POST['textToParse']) . ' символов<br>';
        // не знаю почему, но русский символ он считывает за два
    } else {
        $_SESSION['textInfo'] = 'Текста нет...';
    }
}
echo $_SESSION['textInfo'];
?>
