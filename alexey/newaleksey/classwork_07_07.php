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
$array[0] = 0;
for($i=0; $i<=$n; $i++){
    if($array[$i] == 0){
    	$array[$i] +=1}
    	else {
    		$array[$i] -=1;}
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

// echo $array[$nechMest];
// foreach($array as $namber){
//     if($namber%2==0){
//             echo $namber . ', ';
//     }


// $array = array(2, 5, 8, 1);
// $elemMass = count($array);
// $sum = 0;
//     for($i=0; $i <= $elemMass -1; $i++){
//         $sum = $sum + $array[$i];
//     }
// $srSym = $sum / $elemMass;
// echo $srSym;

// $i=2;
// $x = $pow = 5;
// while($i<=7){
//     $pow = $pow*$x;
//     $i +=1;
// }
// echo $pow;

// $x = pow(5, 7);
// echo $x;

// $i=1;
// $x = $pow = 5;
// while($i<=7){
// 	$pow = $pow*$x;
// 	$i +=1;
// }
// echo $pow;
// $i=1;
// $sum = 0;
// while($i<=100){
//     $sum = $sum + $i;
//     $i +=1;
// }
// echo $sum;

// $bucketOfApples = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
// $i = 0;
// $biggestApple = $bucketOfApples[0];
// while ($i <= count($bucketOfApples) - 1){
//     $currentApple = $bucketOfApples[$i];
//     if ($currentApple > $biggestApple) {
//         $biggestApple = $currentApple;
//     }
//     $i+= 1;
// }
// echo 'Самое большое яблоко: ' . $biggestApple;
