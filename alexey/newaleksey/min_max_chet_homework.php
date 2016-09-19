<?php

$array = array();

$i = 1;
while ($i <= 100) {
    $array[] = rand(1, 100);
    $i++;
}
echo "Четные числа: ";
    $max=$array[0];
    $min=$array[0];
foreach($array as $namber){
    if($namber%2==0){
            echo $namber . ', ';
    }
    if($min>$namber){
        $min=$namber;
    }
    if($max<$namber){
        $max=$namber;
    }
}
echo "<br />" . "Минимальное значение $min";
echo "<br />" . "Минимальное значение $max";
?>