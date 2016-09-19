<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1. Написать скрипт, который возводит число (к примеру 5) в 7 степень.
echo '1. Написать скрипт, который возводит число (к примеру 5) в 7 степень.<br /><br />';

// Решение 1:
echo 'Решение 1:<br /><br />';

function power($a = 2, $c = 2) {
    $b = $a;
    $i = 1;
    while ($i < $c) {
        $b = $b * $a;
        $i++;
    }
    return $b;    
}
$result = power(5, 7);
echo $result . "<br /><br />\r\n";

// Решение 2:
echo 'Решение 2:<br /><br />';

function power2($a = 2, $d = 2) {  
    $pow = $a ** $d;
    return $pow;
}
$result = power2(5, 7);
echo $result . "<br /><br />\r\n";


// 2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и закончить обработку массива.
echo '2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и закончить обработку массива.<br /><br />';

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 37, 2, 4, 9, 44, 3);

function searchElem($array, $n) {
    foreach ($array as $element) {
        // echo $element . '<br />';
        if ($element == $n) {
            echo $element . "<br /><br />\r\n";
            break;
        }
    }
}

$n = 37;
searchElem($numbers, $n);


// 3. Найти сумму всех четных чисел в массиве
echo '3. Найти сумму всех четных чисел в массиве<br /><br />';

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

function searchEven($arr) {
	$sum = 0;
	foreach ($arr as $key => $number) {
	    if ($number % 2 == 0) {
	        $sum = $sum + $number;
	    }
	}
	echo 'Сумма всех четных чисел в массиве: ' . $sum . "<br /><br />\r\n";
}

searchEven($numbers);


// 4. Найти среднее арифметическое всех чисел в массива
echo '4. Найти среднее арифметическое всех чисел в массиве<br /><br />';

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

function average($arr) {
    $sum = 0;
    $countArr = count($arr);
    foreach ($arr as $key => $number) {
        $sum = $sum + $number;
    }
    echo 'Сумма всех чисел: ' . $sum . "<br />\r\n";
    echo 'Кол-во элементов: ' . $countArr . "<br />\r\n";
    $aver = $sum / $countArr;
    echo 'Среднее арифметическое: ' . $aver . "<br /><br />\r\n";
}

average($numbers);


// 5. Получить среднее арифметическое всех чётных элементов массива, стоящих на нечётных местах.
echo '5. Получить среднее арифметическое всех чётных элементов массива, стоящих на нечётных местах.<br /><br />';

$numbers = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

function averSuit($arr) {
    $sum = 0;
    $suitElem = 0;
    foreach ($arr as $key => $number) {
        if (($key % 2 !== 0) && ($number % 2 == 0)) {
            $sum = $sum + $number;
            $suitElem++;
        }
    }
    echo 'Сумма: ' . $sum . "<br />\r\n";
    echo 'Кол-во подходящих элементов: ' . $suitElem . "<br />\r\n";
    echo 'Среднее: ' . $average = $sum / $suitElem . "<br /><br />\r\n";
    // echo 'Среднее: ' . $average . "<br /><br />\r\n";
}

averSuit($numbers);


// 6. Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
echo '6. Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.<br /><br />';

function buildArr($j) {
    $arr = array();
    for ($i = 0; $i < $j; $i++) {
        if ($i % 2 == 0) {
            $arr[$i] = 0;
        } elseif ($i % 2 !== 0) {
            $arr[$i] = 1;
        }
    }
    return $arr;
}

$matrix = buildArr(20);
echo '<pre>';
print_r($matrix);
echo '</pre>';


// 7. Используя функцию in_array() проверить, сколько в массиве повторяющихся значений.
echo '7. Используя функцию in_array() проверить, сколько в массиве повторяющихся значений.<br /><br />';

echo 'Решение 1:<br /><br />';

$numbersOld = [1, 2, 3, 4, 3, 1, 2];

function countDouble($array) {
    $double = 0;
    $arrayNew = [];
    foreach ($array as $value) {
        if (in_array($value, $arrayNew)) {
            $double++;
        } else {
            $arrayNew[] = $value;
        }
    }
    return $double;
}

$countDouble = countDouble($numbersOld);
echo $countDouble;

echo '<br /><br />';

echo 'Решение 2:<br /><br />';

function countDouble2($array) {
    $double = 0;
    $arrayNew = [];
    foreach ($array as $value) {
        if (!in_array($value, $arrayNew)) {
            $arrayNew[] = $value;
        } else {
            $double++;
        }
    }
    return $double;
}

$countDouble2 = countDouble2($numbersOld);
echo $countDouble2;

echo '<br /><br />';


// 8. Есть 2 массива заполненные случайными числами. Использую in_array() функцию, посчитать сколько чисел из массива A есть в массиве B
echo '8. Есть 2 массива заполненные случайными числами. Используя in_array() функцию, посчитать сколько чисел из массива A есть в массиве B';
echo '<br /><br />';

echo 'Решение:';
echo '<br /><br />';

$numbers1 = [2, 6, 8, 3, 1, 7, 1, 3, 2, 4];
$numbers2 = [1, 2, 3, 4, 5];

function searchRepeating($array1, $array2) {
    $repeating = 0;
    $arrayUnique = [];
    foreach ($array1 as $value) {
        if (!in_array($value, $arrayUnique)) {
            $arrayUnique[] = $value;
        }
    }
    foreach ($arrayUnique as $value) {
        if (in_array($value, $array2)) {
            $repeating++;
        }
    }
    return $repeating;
}

$countRepeating = searchRepeating($numbers1, $numbers2);
echo $countRepeating;

echo '<br /><br />';


// 9. Заменить в массиве все числа меньше 10 на 99910. Все числа которые больше или равны 10, но меньше  25 - заменить на 9991025. Все числа которые больше 25 и делятся на 2 заменить, заменить на 9992, а которые не делятся на 2 - заменить на 9991. Если в массиве встречается число 64 - прекратить обработку массива.
echo '9. Заменить в массиве все числа меньше 10 на 99910. Все числа которые больше или равны 10, но меньше  25 - заменить на 9991025. Все числа которые больше 25 и делятся на 2 заменить, заменить на 9992, а которые не делятся на 2 - заменить на 9991. Если в массиве встречается число 64 - прекратить обработку массива.';
echo '<br /><br />';

echo 'Решение:';
echo '<br /><br />';

$arrayNumbers = array(1, 10, 25, 28, 31, 64, 100);

function fewConditions($array) {
    foreach ($array as $index => $value) {
        if ($value == 64) {
            echo 'Do break <br />';
            break;
        }
        elseif ($value < 10) {
            $array[$index] = 99910;
            echo $array[$index] . '<br />';
        }
        elseif ($value >= 10 && $value < 25) {
            $array[$index] = 9991025;
            echo $array[$index] . '<br />';
        }
        elseif ($value > 25 && $value % 2 == 0) {
            $array[$index] = 9992;
            echo $array[$index] . '<br />';
        }
        elseif ($value > 25 && $value % 2 > 0) {
            $array[$index] = 9991;
            echo $array[$index] . '<br />';
        }
    }
    return $array;
}

$result = fewConditions($arrayNumbers);
echo '<pre>';
print_r($result);
echo '</pre>';


// 10. Найти максимальные элементы массива в заданных диапазонах. К примеру:
// Массив
// $array = [1, 2, 9, 86, 24, 6, 45, 72];
// Диапазаоны:
// 1-10, 20-50, 50-100
// Ответ:
// диапазон 1-10: максимальное число - 9
// диапазон 20-50: макс 45
// диапазон 50-100: макс 86

// $newNumbers = array(
//  '1-10' => array(1, 2, 6, 9),
//  '20-50' => array(24, 45),
//  '50-100' => array(72, 86)
// )
echo '10. Найти максимальные элементы массива в заданных диапазонах.';
echo '<br /><br />';

echo 'Этап 1:';
echo '<br /><br />';

$numbers = array(1, 2, 9, 86, 24, 6, 45, 72);

function sortToRanges($array) {
    $newArray = array('1-10' => array(), '20-50' => array(), '50-100' => array());
    foreach ($array as $value) {
        if ($value <= 10) {
            $newArray['1-10'][] = $value;
        }
        elseif ($value >= 20 && $value <= 50) {
            $newArray['20-50'][] = $value;
        }
        elseif ($value > 50 && $value <= 100) {
            $newArray['50-100'][] = $value;
        }
    }
    return $newArray;
}

$newNumbers = sortToRanges($numbers);
echo '<pre>';
print_r($newNumbers);
echo '</pre>';

echo '<br />';

echo 'Этап 2:';
echo '<br /><br />';

echo 'Решение 1:<br /><br />';

function getMax($newNumbers) {
    $biggestNumber = 0;
    foreach ($newNumbers['1-10'] as $newNumber) {
        if ($newNumber > $biggestNumber) {
            $biggestNumber = $newNumber;
        }
    }
    echo 'Макс. число из диапазона 1-10: ' . $biggestNumber . '<br />';

    $biggestNumber = 0;
    foreach ($newNumbers['20-50'] as $newNumber) {
        if ($newNumber > $biggestNumber) {
            $biggestNumber = $newNumber;
        }
    }
    echo 'Макс. число из диапазона 20-50: ' . $biggestNumber . '<br />';

    $biggestNumber = 0;
    foreach ($newNumbers['50-100'] as $newNumber) {
        if ($newNumber > $biggestNumber) {
            $biggestNumber = $newNumber;
        }
    }
    echo 'Макс. число из диапазона 50-100: ' . $biggestNumber . '<br />';
}

getMax($newNumbers);

echo '<br />';

echo 'Решение 2:<br />';

function getMax2($newNumbers) {
    $biggestNumber = 0;
    foreach ($newNumbers as $diapason) {
        echo '<pre>';
        print_r($diapason);
        echo '</pre>';
        foreach ($diapason as $currentNumber) {
            if ($currentNumber > $biggestNumber) {
                $biggestNumber = $currentNumber;
            }
        }
        echo 'Макс. число из диапазона: ' . $biggestNumber . '<br />';
    }
}

getMax2($newNumbers);

echo '<br />';

echo 'Решение 3:<br /><br />';

echo 'Макс. число из диапазона 1-10: ' . max($newNumbers['1-10']) . '<br />';
echo 'Макс. число из диапазона 20-50: ' . max($newNumbers['20-50']) . '<br />';
echo 'Макс. число из диапазона 50-100: ' . max($newNumbers['50-100']) . '<br />';

echo '<br />';

echo 'Решение 4:<br /><br />';

function getMax3($newNumbers) {
    $biggestNumber = 0;
    foreach ($newNumbers as $key => $diapason) {
        foreach ($diapason as $currentNumber) {
            if ($currentNumber > $biggestNumber) {
                $biggestNumber = $currentNumber;
            }
        }
        echo "Макс. число из диапазона $key: " . $biggestNumber . '<br />';
    }
}

getMax3($newNumbers);

echo '<br />';

echo 'Решение 5:<br />';

function getMax4($newNumbers) {
    $biggestNumber = 0;
    $resultArray = [];
    foreach ($newNumbers as $key => $diapason) {
        foreach ($diapason as $currentNumber) {
            if ($currentNumber > $biggestNumber) {
                $biggestNumber = $currentNumber;
            }
            $resultArray[$key] = $biggestNumber;
        }
    }
    return $resultArray;
}

$result = getMax4($newNumbers);
echo '<pre>';
print_r($result);
echo '</pre>';