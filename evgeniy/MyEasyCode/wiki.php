<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ------------------

$numbers = array(1, 3, 4, 6, 7, 9, 10);

$count = count($numbers);

echo '<pre>';
print_r($numbers);
echo '</pre>';

// Цикл foreach:

foreach ($numbers as $index => $value) {
	echo 'index: ' . $index;
	echo ', value: ' . $value . '<br />';
}

// ------------------

// Цикл for:

for ($i = 1; $i <= 100; $i++) {
	$numbers[] = $i;
}
print_r($numbers); */

// ------------------

$numbers = array();
for ($i = 100; $i >= 1; $i--) {
	$numbers[] = $i;
}
print_r($numbers);

// ------------------

// Цикл while:
$i = 1;
while ($i < 10) {
    echo "Hello!";
    echo "<br />";
    $i++;
}

// ------------------

// Цикл do while:
$i = 11;
do {
    print "Hello! <br />";
    $i++;
   }
while ($i < 10);

// ------------------

// Условия:
$i = 4;
if ($i < 2) { // false
    echo $i . ' < 2';
} elseif ($i < 3) { // false
    echo $i . ' < 3';
} elseif ($i < 4) { // false
    echo $i . ' < 4';
} else {
    echo $i . ' is too big';
}

// ------------------

$i = 4;
if ($i > 2 && $i < 5) {
    echo 'true';
} else {
    echo 'false';
}

if ($i == 2 || ($i < 5 && $i > 3) ) {
    echo 'true';
} else {
    echo 'false';
}

// ------------------

// switch_case:
$value = 6;
switch ($value) {
    case ($value > 4 && $value < 10): // if ($value > 4 && $value < 10)
        echo 'value > 4 and < 10';
        break;
    case 3: // elseif ($value == 3)
        echo 3;
        break;
    case 5: // elseif ($value == 5)
        echo 5;
        break;
    default: // else
        echo 'default';
}