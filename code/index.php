<?php
/*
 * 1.Регулярные выраженияa.Напишите регулярку, которая найдет строки
 * 'abba', 'adca','abea' по шаблону:буква'a',двалюбыхсимвола,буква'b'.
 * Пример строки:$str='ahb acb aeb aeeb adcb axeb'.
*/
echo '1.Регулярные выражения<br>';
$regexp = '/a.{2}b/';
$str='ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
print_r($matches);
