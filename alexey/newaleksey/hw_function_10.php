
<?php
// 1. Написать скрипт, который возводит число(к примеру 5) в 7 степень.
function power($a = 5, $b = 7){
	$power = $a;
	for($i = 2; $i <= $b; $i++){
		$power = $power * $a;
	}
	return $power;
}
$result = power(2, 5);
echo $result;

// 2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и закончить обработку массива.

function arrayrandom ($arraycount = 100, $min = 1, $max = 100, $value = 37){
	$randarray = array();
	for($i = 0; $i <= $arraycount; $i++){
		$randarray[] = rand($min, $max);	
	}
	if(in_array($value, $randarray)){
		echo "В массиве есть " . $value;
	}
	else{
		echo "Нет в массиве " . $value;
	}
}
$result = arrayrandom();
echo $result;

// 3. Найти сумму всех четных чисел в массиве

function arrayrandom ($arraycount = 10, $min = 1, $max = 10){
	$randarray = array();
	$sum = 0;
	$a = 0;
	for($i = 0; $i < $arraycount; $i++){
		$randarray[] = rand($min, $max);	
	}
	foreach ($randarray as $key => $value) {
		if($value % 2 == 0){
			$sum = $sum + $value;
			$a++;
		}
	}
	$average = $sum / $a;
	return $average; 
}
$result = arrayrandom();
echo $result;

//Задание 4. Получить среднее арифметическое всех чётных элементов массива
$array = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
function modsum($array){
	$elemArray = count($array);
	$sum = 0;
	$resultElemArray = 0;
	for($i=0; $i <= $elemArray -1; $i++){
    	if ($array[$i]%2==0){
           	$sum = $sum + $array[$i];
           	$resultElemArray += 1;
    	}
	}
	$medium = $sum / $resultElemArray;
	// print_r($medium);
	return $medium;
}
$result = modsum($array);
echo $result;

// Задание 5. Получить среднее арифметическое всех чётных элементов массива, стоящих на нечётных местах
$array = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
function modsum($array){
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
	return $medium;
}
$result = modsum($array);
echo $result;

//Задание 7.1. Напсать функцию in_array
$array = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
function inArray($array, $number){
	foreach ($array as $key => $value) {
		if($number == $value){
			return "Есть в массиве " . $number;
		}
		else{
			return "Нет в массиве " . $number;
		}
	}	
}
$result = inArray($array, 7);
echo $result;

//9. Заменить в массиве все числа меньше 10 на 99910. Все числа которые больше или равны 10, но меньше  25 - заменить на 9991025. Все числа которые больше 25 и делятся на 2 заменить, заменить на 9992, а которые не делятся на 2 - заменить на 9991. Если в массиве встречается число 64 - прекратить обработку массива.
<?php
$array = [1, 2, 3, 4, 5, 6, 15, 20, 26, 28, 29, 64, 100];
$a = 99910;
$b = 9991025;
$c = 9992;
$d = 9991;
$f = 64;
function replaceArray($array, $a, $b, $c, $d, $f){
	foreach ($array as $key => $value) {
		if($value == $f){
			break;
		}
		elseif($value < 10){
		    $value = $a;
	    	$array[$key] = $value;
		}
		elseif($value > 10 && $value < 25){
			$value = $b;
			$array[$key] = $value;
		}
		elseif($value > 10 && $value % 2 == 0){
			$value = $c;
			$array[$key] = $value;
		}
		elseif($value > 10 && $value % 2 !== 0){
			$value = $a;
			$array[$key] = $value;
		}
	}
	return $array;
}
$result = replaceArray($array, $a, $b, $c, $d, $f);
print_r($result);

//10. Нахождение максимального числа в массиве в любом диапазоне
<?php
$array = [1,2,9, 86,24,6, 45,72];
$min = 20;
$max = 40;
function maxNumDipazon($array, $min, $max){
    $maxNum = 0;
	foreach ($array as $key => $value) {
		if($value >= $min && $value <= $max && $maxNum < $value){
			$maxNum = $value;
		}
	}
	return "Диапазон " . $min . "-" . $max . ": максимальное число - " . $maxNum;
}
$result = maxNumDipazon($array, $min, $max);
echo $result;