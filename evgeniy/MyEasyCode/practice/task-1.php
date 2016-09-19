<?php
echo 'Задача 1';
echo '<br /><br />';
echo 'Написать функцию, которая принимает на вход массив с цифрами и возвращает 
      массив только с четными числами, если вторым аргументом передан true 
      или с не четными числами, если вторым аргументом передан false';
/*
* Пример:
* $array = [1, 2, 3, 4];
* $oddElements = getEelements($array, true); // [2, 4]
* $notOddElements = getElements($array, false); [1, 3]
*/
echo '<br /><br />';
echo 'Решение:';

/*
function getElements($array, $boolean) {
	if ($boolean == true) {
		foreach ($array as $value) {
			if ($value % 2 == 0) {
				$newNumbers[] = $value;
			}
		}
	}
	elseif ($boolean == false) {
		foreach ($array as $value) {
			if ($value % 2 > 0) {
				$newNumbers[] = $value;
			}
		}
	}
	return $newNumbers;
}
*/

function getElements($array, $boolean) {
	foreach ($array as $value) {
		if ($value % 2 == 0) {
			$evenNumbers[] = $value;
		} else {
			$oddNumbers[] = $value;
		}
	}
	if ($boolean == true) {
		return $evenNumbers;
	}
	elseif ($boolean == false) {
		return $oddNumbers;
	}
}

$numbers = [1, 2, 3, 4];

$evenElements = getElements($numbers, true); // [2, 4]
echo '<pre>';
print_r($evenElements);
echo '</pre>';

$oddElements = getElements($numbers, false); // [1, 3]
echo '<pre>';
print_r($oddElements);
echo '</pre>';
