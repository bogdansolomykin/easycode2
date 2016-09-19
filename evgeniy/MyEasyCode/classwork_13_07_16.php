<?php

// 9. Заменить в массиве все числа меньше 10 на 99910. Все числа которые больше или равны 10, но меньше  25 - заменить на 9991025. Все числа которые больше 25 и делятся на 2 заменить, заменить на 9992, а которые не делятся на 2 - заменить на 9991. Если в массиве встречается число 64 - прекратить обработку массива.

/*
$array = array(1, 10, 25, 28, 31, 64, 100);

foreach ($array as $index => $value) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	if ($value == 64) {
		continue;
	}
	elseif ($value < 10) {
		$array[$index] = 99910;
		echo $array[$index] . ', ';
	}
	elseif ($value >= 10 && $value < 25) {
		$array[$index] = 9991025;
		echo $array[$index] . ', ';
	}
	elseif ($value > 25 && $value % 2 == 0) {
		$array[$index] = 9992;
		echo $array[$index] . ', ';
	}
	elseif ($value > 25 && $value % 2 > 0) {
		$array[$index] = 9991;
		echo $array[$index] . ', ';
	}
}
echo '<pre>';
print_r($array);
echo '</pre>';
*/

// 10. Найти максимальные элементы массива в заданных диапазанах. К примеру:
// Массив
// $array = [1, 2, 9, 86, 24, 6, 45, 72];
// Диапазаоны:
// 1-10, 20-50, 50-100
// Ответ:
// диапазон 1-10: максимальное число - 9
// диапазон 20-50: макс 45
// диапазон 50-100: макс 86


// $newNumbers = array(
// 	'1-10' => array(1, 2, 6, 9),
// 	'20-50' => array(24, 45),
// 	'50-100' => array(72, 86)
// )

$numbers = array(1, 2, 9, 86, 24, 6, 45, 72);

$newNumbers = array('1-10' => array(), '20-50' => array(), '50-100' => array());
foreach ($numbers as $number) {
	if ($number <= 10) {
		$newNumbers['1-10'][] = $number;
	}
	elseif ($number >= 20 && $number <= 50) {
		$newNumbers['20-50'][] = $number;
	}
	elseif ($number > 50 && $number <= 100) {
		$newNumbers['50-100'][] = $number;
	}
}

echo '<pre>';
print_r($newNumbers);
echo '</pre>';

echo 'Решение 1:<br /><br />';

$biggestNumber = 0;
foreach ($newNumbers['1-10'] as $newNumber) {
	if ($newNumber > $biggestNumber) {
		$biggestNumber = $newNumber;
	}
}
echo 'Макс. число из диапазона 1-10: ' . $biggestNumber . '<br />';

$biggestNumber = 0;
foreach ($newNumbers['20-50'] as $newNumber) {
	if ($newNumber > $biggestNumber) {
		$biggestNumber = $newNumber;
	}
}
echo 'Макс. число из диапазона 20-50: ' . $biggestNumber . '<br />';

$biggestNumber = 0;
foreach ($newNumbers['50-100'] as $newNumber) {
	if ($newNumber > $biggestNumber) {
		$biggestNumber = $newNumber;
	}
}
echo 'Макс. число из диапазона 50-100: ' . $biggestNumber . '<br />';

echo '<br />Решение 2:<br />';

$biggestNumber = 0;
foreach ($newNumbers as $diapason) {
	echo '<pre>';
	print_r($diapason);
	echo '</pre>';	
	foreach ($diapason as $currentNumber) {
		if ($currentNumber > $biggestNumber) {
			$biggestNumber = $currentNumber;
		}
	}
echo 'Макс. число из диапазона: ' . $biggestNumber . '<br />';
}

echo '<br />Решение 3:<br /><br />';

echo 'Макс. число из диапазона 1-10: ' . max($newNumbers['1-10']) . '<br />';
echo 'Макс. число из диапазона 20-50: ' . max($newNumbers['20-50']) . '<br />';
echo 'Макс. число из диапазона 50-100: ' . max($newNumbers['50-100']) . '<br />';