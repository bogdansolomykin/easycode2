<?php

$array = array();

$i = 1;
while ($i <= 100) {
    $array[] = rand(1, 100);
    $i++;
}

$sum = 0;
foreach ($array as $value) {
    $sum = $sum + $value; 
}

echo $sum;





