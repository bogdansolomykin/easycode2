<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 99910;
$array = [1, 2, 3, 4, 5, 6, 15, 20, 26, 28, 29, 64, 100];
foreach ($array as $key => $value) {// key = 2, value = 3
    if ($value <= 10){
        $value = $a;
        $array[$key] = $value;
    } elseif ($value > 10 && $value < 25) {
        $value = 9991025;
        $array[$key] = $value;
    } elseif ($value > 25 && $value % 2 == 0) {
        $value = 9992;
        $array[$key] = $value;
    } elseif ($value > 25 && $value % 2 !== 0) {
        $value = 9991;
        $array[$key] = $value;
    } elseif ($value == 64) {
        break;
    }
}
//print_r($array);




