<?php

echo 'Задача 2:';
echo '<br />';
echo 'Написать функцию, которая принимает первым аргументом число означающее время месяца и возвращает строку с названием месяца';
echo '<br /><br />';
/*
* Пример:
* $month = getMonth(1);
* echo $mongth; // 'Январь'
* $month = getMonth(13);
* echo $month; // Такого месяца не существует!
*/
echo 'Решение:';
echo '<br />';

function getMonth($number) {
	$months = [1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель', 5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август', 9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'];
	$monthName = '';
	if ($number > 0 && $number <= 12) {	
		$monthName = $months[$number];
	}
	else {
		$monthName = 'Такого месяца не существует!';
	}
	return $monthName;
}

$month = getMonth(9);
echo $month;
