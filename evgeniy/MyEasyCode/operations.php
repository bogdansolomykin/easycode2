<?php

$numberFloat = 10.5;
$numberInt = 10;

$resultMult = $numberFloat * 5;
$resultDiv = $numberFloat / 2;
$resultPlus = $numberInt + 20;
$resultMinus = $numberInt - 5;

// 1. 3 города. $kharkiv = 1500000; Нужно получить среднее кол-во житилей в городах.

$Kharkov = 1500000;
$Kiev = 2500000;
$Odessa = 1200000;
$result = ($Kharkov + $Kiev + $Odessa) / 3
echo $result;