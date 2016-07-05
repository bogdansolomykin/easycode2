<?php

$array = array();

$i = 1;
while ($i <= 100) {
    $array[] = rand(1, 100);
    $i++;
}

$i = 0;
$sum = 0;

while ($i <= 99) {
    $sum += $array[$i];
    $i++;
}

echo 'while solution: ';
echo $sum;

echo "<br />";
echo 'array_sum solution: ';
echo array_sum($array);





