<?php

echo "1.Доступ по ссылке";
/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " qwe";
//// Don't change the line below
echo"<br>Your order is:$very_bad_unclear_name.";

echo"<br> 2.Числа<br>";
$var1 = 2;
echo $var1 . "<br>";
$var2 = 323;
echo $var2;
$var3 = 2.323;
echo " " . $var3 . " ";
echo (5+7) . "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month);

echo "<br> 11.Умножение и деление";
$num_languages = 4;
$months=11;
$days = $months*16;
$days_per_language=$days/$num_languages;
echo "<br>" . $days_per_language;

echo "<br> 12.Степень<br>";
echo 8**2;

echo"<br>13.Операторы присваивания<br>";
$my_num = 22;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

echo"<br>14.Математические функции";
$a = 10; $b=3;
echo "<br>" . ($a%$b);
if ($a%$b==0)
    echo "<br>Делится<br>";
else echo "<br>Делится с остатком<br>" . ($a%$b);
echo $st=pow(2,10) . "<br>";
echo sqrt(245) . "<br>";
$arr = array(
    4,2,5,19,13,0,10
);
$sum = 0;
foreach($arr as $item)
    $sum+=$item**2;
echo sqrt($sum) . "<br>";
echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "<br>";
$arr2 = array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587))
);
foreach ($arr2 as $k => $v)
    echo "$k - $v<br>";
$arr3=array(
    4,-2,5,10,-130,0,10
);
$minN=$arr3[0];$maxN=$arr3[0];
foreach($arr3 as $num){
    echo"$num ";
    if ($minN > $num)
        $minN = $num;
    if ($maxN < $num)
        $maxN = $num;}
echo"<br>maximum - $maxN , minimum - $minN";
echo "<br>" . rand(1,100) . "<br>";
$arr4 = array();
for($i = 0;$i<10;$i++) {
    array_push($arr4, rand(1, 100));
    echo "$arr4[$i] ";
}
for($i = 0; $i < 5;$i++)
{
    $a=rand(-100,100);
    $b=rand(-100,100);
    echo "<br>a-b=$a-$b=|" . ($a-$b) . "|=" . abs($a-$b);
}
$arr5 = array(
    rand(-100,100),
    rand(-100,100),
    rand(-100,100),
    rand(-100,100),
    rand(-100,100),
    rand(-100,100)
);
echo "<br>";
foreach ($arr5 as &$item) {
    echo $item . " ";
    $item = abs($item);
}
echo "<br>";
foreach ($arr5 as $item){
    echo $item . " ";}
$number = rand(30,100);
echo "<br>OUR NUMBER - $number<br>";
$arrDivisor = array();
for ($i = 1;$i <=$number;$i++)
{
    if ($number % $i == 0) {
        array_push($arrDivisor, $i);
        echo $i . " ";
    }
}
$arr6 = array( 1,2,3,4,5,6,7,8,9,10 );
$numOfFirst = 0;
$sum = 0;
while ($sum <= 10){
    $sum+=$arr6[$numOfFirst];
    $numOfFirst++;
}
echo "<br> Дан массив 
[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. 
Узнайте, сколько первых элементовмассива нужно сложить, 
чтобы сумма получилась больше 10. - $numOfFirst";

echo"<br>15.Функции";
function printStringReturnNumber()
{
    echo "<br>String Printed";
    return 23;
}
echo "<br>" . $my_num = printStringReturnNumber();
