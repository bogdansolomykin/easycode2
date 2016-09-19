<?php

// function sum($a = 20, $b = 17) {
// 	$sum = $a + $b;
// 	return $sum;
// }
// $sum = sum();
// echo $sum;

function getArrayWithRandomNumbers($numbersCount, $min = 1, $max = 10)
{
    $array = array();

    for ($i = 0; $i < $numbersCount; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;
}
$array = getArrayWithRandomNumbers(20);

foreach ($array as $value) {
    echo $value . '<br />';
}

$a = 10; // глобальная область видимости

function test()
{
    $a = 20; // локальная область видимости переменной
}

function test2()
{
    $a = 40;
    return $a;
}

echo '<br />';
$a = 30; // глобальная область видимости
test();
test2();

$d = test2();

echo $a;

echo '<br />';

echo $d;

echo '<br /><br />';

$num = 10;
function sum($num){
	// global $num;
	$num++;
	echo $num;
}

echo $num . '<br />';
sum($num);
echo '<br />' . $num . "<br />\r\n<br />\r\n";