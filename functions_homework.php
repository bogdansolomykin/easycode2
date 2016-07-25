<?php
// 1
function getEelements($array, $condition){
		$mod = (int) $condition; 
		foreach ($array as $value){
			if($value % 2 != $mod){
				$modArray[] = $value;
			}
		}
		return $modArray;
}
// 2
function getMonth($number) {
	$months = [1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель', 5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август', 9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'];
	$monthName = '';
	if ($number > 0 && $number < 12) {	
		$monthName = $months[$number];
	} else {
		$monthName = 'Такого месяца не существует!';
	}
	return $monthName;
}
// 3
function getAvgPrice($array) {
	$pricesSum = 0;
	$count = 0;
	foreach ($array as $insertedArray) {
		$pricesSum += $insertedArray['price'];
		$count++;
	}
	$averagePrice = $pricesSum / $count;
	return $averagePrice;
}
// 4
function rollElements($array) {
    $newArray = [];
	foreach ($array as $key => $value) {
		$newArray[$value] = $key;
	}
	return $newArray;
}
