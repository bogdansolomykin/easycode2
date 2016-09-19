<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

setcookie('age', $_GET['age'], time() + 60 * 60 * 24);

echo 'Ваше имя: ' . $_COOKIE['firstname'] . '<br />';
echo 'Ваша фамилия: ' . $_COOKIE['lastname'] . '<br />';
echo 'Ваш возраст: ' . $_GET['age'] . '<br />';
/*
$age = $_COOKIE['age'];
echo "Ваш возраст: $age <br />";
*/
// echo "Ваш возраст: $_COOKIE['age']"; // так нельзя?