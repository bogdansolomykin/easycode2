<?php

require_once 'Car.php';
require_once 'Moto.php';
require_once 'Bike.php';

$car = new Car();
$moto = new Moto();
$bike = new Bike();

$bike->move();