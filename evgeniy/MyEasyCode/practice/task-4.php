<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'Задача 4:';
echo '<br />';
echo 'Написать функцию, которая меняет местами в массиве ключи и значения';
/*
* Пример:
* $colors = array(
*     'blue' => 'синий',
*     'green' => 'зеленый',
*     'yellow' => 'желтый',
*     'red' => 'красный',
* );
* $rolledColors = rollElements($colors);
* print_r($rolledCollors);
* array(
*     'синий' => 'blue',
*     'зеленый' => 'green',
*     'желтый' => 'yellow',
*     'красный' => 'red',
* )
*/
echo '<br /><br />';
echo 'Решение:';
echo '<br />';

function rollElements($array) {
	$newArray = [];
	foreach ($array as $key => $value) {
		$newArray[$value] = $key;
	}
	return $newArray;
}

$colors = array(
    'blue' => 'синий',
    'green' => 'зеленый',
    'yellow' => 'желтый',
    'red' => 'красный',
);

$rolledColors = rollElements($colors);
echo '<pre>';
print_r($rolledColors);
echo '</pre>';