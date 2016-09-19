<?php

$numbers = array();
for ($i = 1; $i <= 100; $i++) {
	$numbers[] = $i;
}
// print_r($numbers);
for ($n = 4; $n < 100; $n += 5) {
	echo 'Index: ' . $n . ', number: ' . $numbers[$n] . '<br />';
}

/*
foreach ($numbers as $number) {
	if ($number == 10 || $number == 25) {
		continue;
	}
	elseif ($number == 77) {
		break;
	}
	else {
		echo $number . '<br />';
	}
}
*/

$randArr = array();
$i = 1;
while ($i <= 20) {
    $randArr[] = rand(1, 20);
    $i++;
}

$randArr2 = array();
$i = 1;
while ($i <= 20) {
    $randArr2[] = rand(1, 20);
    $i++;
}

echo '<pre>';
print_r($randArr);
echo '</pre>';

echo '<pre>';
print_r($randArr2);
echo '</pre>';

/*$a = 35;
if (in_array($a, $randArr)) {
	if (!in_array($a, $randArr2))
		echo 'Всё ОК!';
}*/

foreach ($randArr as $element) {
	if (in_array($element, $randArr2)) {
		echo $element . '<br />';
	}
}