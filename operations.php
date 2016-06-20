<?php

$numberFloat = 10.5;
$numberInt = 10;

$resultMult = $numberFloat * 5;
$resultDiv = $numberFloat / 2;
$resultPlus = $numberInt + 20;
$resultMinus = $numberInt - 5;

// 1. 3 города. $kharkiv = 1500000; Нужно получить среднее кол-во житилей в городах.
$kharkiv = 1500000
$odessa = 1000000;
$kiev = 2000000;
 
$result = ($kharkiv + $odessa + $kiev) / 3 ;
echo $result;

// 2. $a = 2;
$a = 10;
$result = pow($a, 4);
echo $result;

// 3. 
$listOfCity = array(
    'kharkiv' => 100,
    'kiev' => 200,
    'odessa' => 4000
);

$result = ($listOfCity['kharkiv'] + $listOfCity['kiev'] + $listOfCity['odessa']) / count($listOfCity);
$result = array_sum($listOfCity) / count($listOfCity);
echo $result;

