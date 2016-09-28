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

$driver = new Driver();
$driver->setName('Alex');
echo $driver->getTitle() . '. ';
echo $driver->getName();
$passenger = new Passenger();

$driver->sit($moto); // $tank
echo '<br />';
$driver->sit($car);
echo '<br />';
$passenger->sit($moto); // $tank
echo '<br />';
$driver->drive();


