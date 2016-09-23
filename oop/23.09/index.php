<?php
include 'bird.php';
include 'cat.php';
//
$bird = new Bird();
$bird->name = 'kesha';
$bird->age = 2;
echo $bird->getInfo();

echo '<br />';

$cat = new Cat();
$cat->name = 'barsik';
$cat->age = 5;
echo $cat->getInfo();