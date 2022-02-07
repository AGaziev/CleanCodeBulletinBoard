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

echo"<br>16.Функции";
function increaseEnthusiasm($s = "null")
{
    return $s . "!";
}
echo "<br>" . increaseEnthusiasm("MySTRING");
function repeatThreeTimes($s = "null")
{
    return $s . $s . $s;
}
echo "<br>" . repeatThreeTimes("MySecondString");
echo "<br>" . increaseEnthusiasm(repeatThreeTimes("MyThirdString"));
function cut($s = "null", $charsFromStart = 10)
{
    return substr($s,0,$charsFromStart);
}
echo "<br>" . cut(increaseEnthusiasm(repeatThreeTimes("MyThirdString")),5) . "<br>";
function printArray($arr,$endIter,$nowIter=0)
{
    echo $arr[$nowIter] . " ";
    if ($nowIter < $endIter){
        printArray($arr, $endIter, ++$nowIter);
    }else
        return;
}
printArray($arrDivisor,count($arrDivisor));
function returnLastSumOfNum($num,$sum=0)
{
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    echo "$sum ";
    if ($sum>9)
        returnLastSumOfNum($sum);
    else return;
}
echo"<br>";
returnLastSumOfNum(rand(100,999));
echo"<br>17.Массивы<br>";
$xString = "";
$arr7 = array();
for($i=1;$i<10;$i++)
{
    $xString = $xString . "x";
    array_push($arr7,$xString);
}
print_r($arr7);
function arrayFill($filler,$num)
{
    $retArr = array();
    for ($i = 0;$i < $num; $i++)
    {
        array_push($retArr,$filler);
    }
    return $retArr;
}
echo"<br>";
print_r(arrayFill("x",rand(1,10)));
$arr8 = array(
    array(1,2,3),
    array(4,5),
    array(6)
);
function array_multisum(array $arr){
    $sum = array_sum($arr);
    foreach($arr as $child) {
        if (is_array($child))
        $sum += array_multisum($child);
    }
    return $sum;
}
echo"<br>" . array_multisum($arr8) . "<br>";
$arr9 = array();
for ($i=0;$i<3;$i++)
{
    for ($j=0;$j<3;$j++)
    {
        $arr9[$i][$j]=$i+$j+1+2*$i;
    }
}
print_r($arr9);
$arr10 = array(2,5,3,9);
echo "<br>" . $result = $arr10[0]*$arr10[1]+$arr10[2]*$arr10[3] . "<br>";
$user = array(
    "name" => "Ivan",
    "surname" => "Ivanov",
    "patronymic" => "Ivanovich"
);
foreach ($user as $str)
    echo $str . " ";
echo "<br>";
$date = array(
    "year" => 2022,
    "month" => 2,
    "day" => 7
);
foreach ($date as $k=>$str){
    echo $str;
    if ($k!="day")
        echo"-";
}
$arr11=array('a','b','c','d','e');
echo"<br>" . count($arr11);
echo"<br>" . $arr11[count($arr11)-1] . " " . $arr11[count($arr11)-2];
echo"<br>18.Конструкция if else";
$a=rand(1,10);
$b=rand(1,10);
function sumMoreThan10($a,$b)
{
    $sum = $a+$b;
    if ($sum>10)
        return true;
    else return false;
}
echo "<br>$a + $b > 10";
echo sumMoreThan10($a,$b) ? " true" : " false";
function isEqual($a,$b)
{
    if ($a==$b)
        return true;
    else return false;
}
echo "<br>$a = $b";
echo isEqual($a,$b) ? " true" : " false";
$test=rand(0,3);
echo "<br>";
echo ($test == 0) ? "верно": "";
$age = rand(1,200);
function getSumOfDigits($num)
{
    $sum=0;
    while($num>0){
        $sum+=$num%10;
        $num/=10;
    }
    return $sum;
}
echo ($age<10 or $age>99) ? "<br>Число $age <10 или >99"
    : ((getSumOfDigits($age)<10) ? "<br>Сумма цифр $age однозначна" : "<br>Сумма цифр $age двузначна");
$arr12=array();
echo "<br>";
for($i=0;$i<rand(2,5);$i++)
{
    array_push($arr12,rand(0,30));
    echo$arr12[$i] . " ";
}
echo (count($arr12)==3) ? "<br>SUM " . array_sum($arr12) : "<br>!=3";
$xString="";
echo "<br>";
for($i=0;$i<20;$i++)
{
    echo "$xString<br>";
    $xString .= "x";
}