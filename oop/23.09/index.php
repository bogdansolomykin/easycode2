<?php
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
$birdFood = new Bread();
$birdFood->name = 'хлеб';
$bird->eat($birdFood);


