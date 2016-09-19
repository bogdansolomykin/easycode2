<?php
$Kharkov = 1500000;
$Kiev = 2800000;
$Odessa = 1700000;
$cities = array(
	'Kharkov' => $Kharkov,
	'Kiev' => $Kiev,
	'Odessa' => $Odessa,
	);
$average = ($cities['Kharkov'] + $cities['Kiev'] + $cities['Odessa']) / 3;
echo $average;
