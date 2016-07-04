<?php

$colors = array();
// ... some code
$colors[] = 'green';
$colors[] = 'white';
$colors[] = 'yellow';
echo 'Old colors array: ';
echo '<pre>';
print_r($colors);
echo '</pre>';


echo 'New colors array: ';
$newColors = array(
    'green'  => 0,
    'white'  => 1,
    'yellow' => 2
);
echo '<pre>';
print_r($newColors);
echo '</pre>';