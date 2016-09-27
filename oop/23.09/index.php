<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'bird.php';
include 'cat.php';
include 'bread.php';
include 'meat.php';

$cat = new Cat();
$catFood = new Meat();
$catFood->name = 'мясо';
$cat->eat($catFood);

echo '<br />';

$bird = new Bird();
$bird2 = new Bird();
$bird2->name = 'kesha';
$birdFood = new Bread();
$birdFood->name = 'хлеб';
$bird->eat($birdFood);
$var = 1; // integer
$var2 = 2.1; // float
$var3 = true; // bool

$var4 = new Bird(); // Bird


