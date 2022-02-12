<?php
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


