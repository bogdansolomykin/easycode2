<?php

/*
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
*/

$age = 28;
switch ($age) {
    case ($age < 6):
        echo 'Хожу в садик';
        break;
    case ($age >= 6 && $age < 17):
        echo 'Хожу в школу';
        break;
    case ($age >= 17 && $age < 22):
        echo 'Хожу в универ';
        break;
    case ($age >= 22 && $age < 60):
        echo 'Программирую!:)';
        break;
    default:
        echo 'Отдыхаю!';
}

echo '<br /><br />';

$array = array(1, 10, 24, 25, 28, 31, 64, 65, 100);

foreach ($array as $index => $value) {
    switch ($value) {
        case ($value == 64):
            echo '$value = 64, ';
            break 2;
        case ($value < 10):
            $array[$index] = 99910;
            echo $array[$index] . ', ';
            break;
        case ($value >= 10 && $value < 25):
            $array[$index] = 9991025;
            echo $array[$index] . ', ';
            break;
        case ($value > 25 && $value % 2 == 0):
            $array[$index] = 9992;
            echo $array[$index] . ', ';
            break;
        case ($value > 25 && $value % 2 > 0):
            $array[$index] = 9991;
            echo $array[$index] . ', ';
            break;
    }
}

echo '<br />';

echo '<pre>';
print_r($array);
echo '</pre>';