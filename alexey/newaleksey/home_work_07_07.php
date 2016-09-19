<?php

//Задание 6. Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
//Решение 1. Не лучшее решение т.к. $n задваивается
$array = array();
$n = 100;
for($i=0; $i<=$n; $i++){
    for($a=0; $a<=1; $a++){
    $array[] = ($a);
    }
}
echo "<pre>";
print_r($array);
echo "<pre>";
//Решение 2. 
$array = array();
$n = 100;
$value = 0;
for($i=0; $i<=$n; $i++){
    $array[$i] = $value;
    if($value == 0){
    	$value++;}
    	else {
    		$value--;}
}
echo "<pre>";
print_r($array);
echo "<pre>";

//Задание 5. Получить среднее арифметическое всех чётных элементов массива, стоящих на нечётных местах.
$array = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
$elemArray = count($array);
$sum = 0;
$resultElemArray = 0;
for($i=0; $i <= $elemArray -1; $i++){
    if (($i % 2 > 0) && ($array[$i]%2==0)){
           $sum = $sum + $array[$i];
           $resultElemArray += 1;
    }
}
$medium = $sum / $resultElemArray;
print_r($medium);