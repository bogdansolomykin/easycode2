<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Car.php';
require_once 'Moto.php';
require_once 'Bike.php';
require_once 'Driver.php';
require_once 'Passenger.php';

$car = new Car();
$moto = new Moto();
$bike = new Bike();
//$tank = new Tank();

$driver = new Driver('Alex');
echo '<br />';
echo $driver->getName();
echo '<br />';
$passenger = new Passenger('Mike');
echo '<br />';
echo $passenger->getName();
echo '<br />';

$driver->sit($moto); // $tank
echo '<br />';
$driver->sit($car);
echo '<br />';
$passenger->sit($moto); // $tank
unset($passenger);
echo '<br />';
$driver->drive();
echo '<br />';
echo 'Скрипт заканчивает свою работу и начинает освобождать память';
echo '<br />';


