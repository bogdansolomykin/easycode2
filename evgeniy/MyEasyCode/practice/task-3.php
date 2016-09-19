<?php
echo 'Задача 3:';
echo '<br />';
echo 'Написать функцию, которая принимает первым аргументом массив и подсчитывает
      среднюю цену у товаров';
/*
Пример:
* $products = array(
*     'product1' => array('price' => 100),
*     'product2' => array('price' => 200),
*     'product3' => array('price' => 300),
*     'product4' => array('price' => 400),  
* );
* $avgPrice = getAvgPrice($products);
* echo $avgPrice; // 250
*/
echo '<br /><br />';

echo 'Решение 1:';
echo '<br />';

function getAvgPrice($array) {
	$pricesSum = 0;
	$count = 0;
	foreach ($array as $insertedArray) {
		foreach ($insertedArray as $value) {
			$pricesSum += $value;
			$count++;
		}
	}
	$averagePrice = $pricesSum / $count;
	return $averagePrice;
}

$products = array(
    'product1' => array('price' => 100),
    'product2' => array('price' => 200),
    'product3' => array('price' => 300),
    'product4' => array('price' => 400),  
);

$avgPrice = getAvgPrice($products);
echo $avgPrice;

echo '<br /><br />';

echo 'Решение 2:';
echo '<br />';

function getAvgPrice2($array) {
	$pricesSum = 0;
	$count = 0;
	foreach ($array as $insertedArray) {
		$pricesSum += $insertedArray['price'];
		$count++;
	}
	$averagePrice = $pricesSum / $count;
	return $averagePrice;
}

$products = array(
    'product1' => array('price' => 100, 'category' => 'auto', 'weight' => 1.5),
    'product2' => array('price' => 200, 'category' => 'phone'),
    'product3' => array('price' => 300),
    'product4' => array('price' => 400),  
);

$avgPrice = getAvgPrice2($products);
echo $avgPrice;