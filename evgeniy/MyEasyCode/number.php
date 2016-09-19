<?php

/*
$i = 1;
while ($i <= 100) {
	echo $i . '<br />';
	$i++;
}
*/

/*
$i = 1;
$sum = 0;
while ($i <= 100) {
	$sum = $sum + $i;
	$i++;
}
echo 'Сумма всех чисел: ' . $sum . '<br />';
$aver = $sum / ($i-1);
echo 'Среднее арифметическое: ' . $aver . '<br />';
*/

/*
// 1. Написать скрипт, который возводит число (к примеру 5) в 7 степень.

$a = 5;
$b = $a;
$i = 1;
while ($i < 7) {
	$b = $b * $a;
	$i++;
}
echo 'Число ' . $a . ' в ' . $i . '-й степени = ' . $b . '<br />';
*/

/*
// 4. Найти среднее арифметическое всех чисел в массива

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
$countArr = count($numbers);
$sum = 0;
foreach ($numbers as $key => $number) {
    $sum = $sum + $number;
}
echo 'Сумма всех чисел: ' . $sum . "<br />\r\n";
echo 'Кол-во элементов: ' . $countArr . "<br />\r\n";
$aver = $sum / $countArr;
echo 'Среднее арифметическое: ' . $aver . "<br /><br />\r\n";
*/

/*
// 5. Получить среднее арифметическое всех чётных элементов массива, стоящих на нечётных местах.

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
$sum = 0;
$suitElem = 0;
foreach ($numbers as $key => $number) {
    if (($key % 2 !== 0) && ($number % 2 == 0)) {
        $sum = $sum + $number;
        $suitElem++;
    }
}
echo 'Сумма: ' . $sum . "<br />\r\n";
echo 'Кол-во подходящих элементов: ' . $suitElem . "<br />\r\n";
$average = $sum / $suitElem;
echo 'Среднее: ' . $average . "<br /><br />\r\n";
*/

/*
$numbers = array(1, 2, 3, 4, 8);
foreach ($numbers as $number) {
	$twice = $number * 2;
	$twiceArray[] = $twice;
}
echo '<pre>';
print_r($twiceArray);
echo '</pre>';
*/

/*
$numbers = array(1, 2, 3, 4, 8);
foreach ($numbers as $index => $number) {
	$number *= 2;
	$numbers[$index] = $number;
}
echo '<pre>';
print_r($numbers);
echo '</pre>';
*/