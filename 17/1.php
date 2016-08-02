<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'File: ' . __FILE__;
echo "<br />";

#include '/var/www/html/17/2.php'; // абсолютный
#include '2.php'; // относительный

#include '../arrays.php';

#require '4.php'; // здесь ошибка
#require '3.php';

#echo 'Все файлы подключены!';

#include_once '2.php';
#include_once '2.php';
