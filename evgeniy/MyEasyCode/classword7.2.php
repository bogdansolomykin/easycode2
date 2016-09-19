<?php

$colors = array();
$colors[] = 'green';
$colors[] = 'white';
$colors[] = 'yellow';

echo 'Old colors array: ';
echo '<pre>';
print_r($colors);
echo '</pre>';

echo 'New colors array: ';

$newColors = array();
foreach ($colors as $index => $colorName) {
	$newColors[$colorName] = $index;
}

// $newColors = array_flip($colors);

echo '<pre>';
print_r($newColors);
echo '</pre>';
