<?php

echo 'Задачи: ';

echo 'Задача 1';
echo 'Написать функцию, которая принимает на вход массив с цифрами и возвращает 
      массив только с четными числами, если вторым аргументом передан true 
      или с не четными числами, если вторым аргументом передан false';
/**
* Пример:
* $array = [1, 2, 3, 4];
* $oddElements = getEelements($array, true); // [2, 4]
* $notOddElements = getElements($array, false); [1, 3]
*/      

echo 'Задача 2';
echo 'Написать функцию, которая принимает первым аргументом число означающее время месяца'.
echo 'И возвращает строку с названием месяца';

/**
* Пример:
* $month = getMonth(1);
* echo $mongth; // 'Январь'
* $month = getMonth(13);
* echo $month; // Такого месяца не существует!
*/

echo 'Задача 3';
echo 'Написать функцию, которая принимает первым аргументом массив и подсчитывает
      среднюю цену у товаров';
/**
* Пример:
* $products = array(
*     'product1' => array('price' => 100),
*     'product2' => array('price' => 200),
*     'product3' => array('price' => 300),
*     'product4' => array('price' => 400),  
* );
* $avgPrice = getAvgPrice($products);
* echo $avgPrice; // 250
*/      

echo 'Задача 4';
echo 'Написать функцию, которая меняет местами в массиве ключи и значения';

/**
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