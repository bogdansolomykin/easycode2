<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// increment
//$i = 1;
//echo '$i before: ' . $i;
//echo '<br />';
//$i = $i + 1;
//echo '$i after "$i = $i + 1;": ' . $i;
//echo '<br />';
//$i += 1;
//echo '$i after "$i += 1;": ' . $i;
//echo '<br />';
//echo '$i after "$i++;": ' . $i++;
//echo '<br />';
//echo '$i after "++$i;": ' . ++$i;
//echo '<br />';

// for
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$arrayCount = count($array); // получить кол-во элементов в массиве
for ($i = 7; $i < $arrayCount; $i++) { // 10
    echo $array[$i];
    echo "<br />";
}

// foreach

// while do

// do while
