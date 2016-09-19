<?php

echo 'Задача 1';
echo 'Написать функцию, которая принимает на вход массив с цифрами и возвращает 
      массив только с четными числами, если вторым аргументом передан true 
      или с не четными числами, если вторым аргументом передан false';
$array = [1, 2, 3, 4];
function getElements($array, $type){
	$newArray = [];
	$bol = (int) $type;
	foreach ($array as $key => $value){
		if($value % 2 !== $bol){
			$newArray[] = $value; 
		}
	}
	return $newArray;
}
echo "<pre>";
print_r(getElements($array, true));
echo "<pre>";



echo 'Задача 2';
echo 'Написать функцию, которая принимает первым аргументом число означающее время месяца'.
echo 'И возвращает строку с названием месяца';
function getMonth($i){
	$array = [1 => 'Январь', 'Февраль', 'Март', 'Апрель'];
	if($i > 0 && $i <= 12){
		return $array[$i];
	}
	else{
		return 'Нет такого месяца';
	}
}
echo getMonth(87);



echo 'Задача 3';
echo 'Написать функцию, которая принимает первым аргументом массив и подсчитывает
      среднюю цену у товаров';
$products = array(
    'product1' => array('price' => 100, 'category' => 'auto', 'weight' => 1.5),
    'product2' => array('price' => 200, 'category' => 'phone'),
    'product3' => array('price' => 300),
    'product4' => array('price' => 400),  
);
function getAvgPrice($products){
	$sum = 0;
	$i = 0;
	foreach ($products as $key => $value) {
			$sum = $sum + $value['price'];
			$i++;			
		}
	return $avgSum = $sum / $i;
}
echo getAvgPrice($products);



echo 'Задача 4';
echo 'Написать функцию, которая меняет местами в массиве ключи и значения';

$colors = array(
     'blue' => 'синий',
     'green' => 'зеленый',
     'yellow' => 'желтый',
     'red' => 'красный',
 );

function grollElements($colors){
	foreach ($colors as $key => $value) {
		$rollColors[$value] = $key;
	}
	return $rollColors;
}
print_r(grollElements($colors));