<?php

<?php

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
}

$a = 30; // глобальная область видимости
test();
test2();
echo $a;