<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

$var = 0;

if ($var == 1) {
    echo '$var == 1 <br />';
} else {
    echo '$var != 1 <br />';
}

// Аналог записи с помощью тернарного оператора:
//     (condition) ? (if true) : (else)
echo $var == 1 ? '$var == 1' : '$var != 1';
// в зависимости от значения $var выведется либо '$var == 1', либо '$var != 1'


