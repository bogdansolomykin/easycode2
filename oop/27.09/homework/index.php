<?php

require_once 'Car.php';
require_once 'Moto.php';
require_once 'Bike.php';
require_once 'Driver.php';
require_once 'Passenger.php';

$car = new Car();
$moto = new Moto();
$bike = new Bike();

$driver = new Driver();
$passenger = new Passenger();

$driver->sit($moto);
echo '<br />';
$passenger->sit($moto);
echo '<br />';
$driver->drive();


