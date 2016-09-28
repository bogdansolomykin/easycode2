<?php

require_once 'Car.php';
require_once 'Moto.php';
require_once 'Bike.php';
require_once 'Driver.php';
require_once 'Passenger.php';

$car = new Car();
$moto = new Moto();
$bike = new Bike();
$tank = new Tank();//

$driver = new Driver();
$passenger = new Passenger();

$driver->sit($moto); // $tank
echo '<br />';
$passenger->sit($moto); // $tank
echo '<br />';
$driver->drive();


