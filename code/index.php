<?php
echo "1.Доступ по ссылке\n";
/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " qwe";
//// Don't change the line below
echo"\nYour order is:$very_bad_unclear_name.";
echo"\n 2.Числа\n";
$var1 = 2;
echo $var1 . "\n";
$var2 = 323;
echo $var2;
$var3 = 2.323;
echo " " . $var3;
echo 5+7;
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;