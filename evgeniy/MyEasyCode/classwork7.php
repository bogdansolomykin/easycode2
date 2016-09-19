<?php

// создать массив с сотней элементов от 1 до 100

/* $numbers = array();
for ($i = 1; $i <= 100; $i++) {
	$numbers[] = $i;
}
print_r($numbers); */

$numbers = array();
for ($i = 100; $i >= 1; $i--) {
	$numbers[] = $i;
}
print_r($numbers);