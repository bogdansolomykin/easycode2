<?php
$colors = array();
$colors[] = 'green';
$colors[] = 'white';
$colors[] = 'yellow';

$colors = array_flip ($colors);
echo '<pre>';
print_r($colors);
echo '</pre>';