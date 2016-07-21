<?php

// 1
function customPow($number, $pow = 2)
{
    $result = $number;
    for ($i = 0; $i < $pow - 1; $i++) {
        $result = $result * $number;
    }

    return $result;
}

echo customPow(2, 3);

// 2 in_array($element, $array)
function checkElement($element, $array)
{
    foreach ($array as $value) {
        if ($element == $value) {
            return true;
        }
    }

    return false;
}

$names = array('sasha', 'oleg', 'dasha');
$name = 'dima';
$result = checkElement($name, $names);

if (checkElement($name, $names)) { // false
    echo 'есть ' . $name;
} else {
    echo 'Имени ' . $name . ' нет';
}

// 3 in_array($element, $array)
function sumAllOddElements($array)
{
    $result = 0;
    foreach ($array as $value) {
        if ($value % 2 == 0) {
            $result += $value;
        }
    }

    return $result;
}

$array = array(1, 2, 3, 2);
echo sumAllOddElements($array);

// 4
function avgValueOfElements($array)
{
    $count = count($array);
    $resultAvg = 0;

    foreach ($array as $value) {
        $resultAvg += $value;
    }

    return $resultAvg / $count;
}

$array = array(1, 2, 3, 4, 5);
echo avgValueOfElements($array);

// 5
function customAvgValueOfElements($array)
{
    $count = 0;
    $resultAvg = 0;
    $i = 0;
    foreach ($array as $value) {
        if ($value % 2 == 0 && $i % 2 != 0) {
            $resultAvg += $value;
            $count++;
        }
        $i++;
    }

    return $resultAvg / $count;
}

$array = array(1, 2, 3, 4, 5, 7);
echo customAvgValueOfElements($array); // 3

// 6
function fillArray($a, $b, $count) {
    $array = array();
    for ($i = 1; $i <= $count * 2; $i++) {
        if ($i % 2 != 0) {
            $array[] = $a;
        } else {
            $array[] = $b;
        }
    }

    return $array;
}

$result = fillArray(3, 7, 10);
echo '<pre>';
print_r($result);
echo '</pre>';

// 7
function getCountOfSimilarElementsInArray($array)
{
    $array2 = array();
    $resultCount = 0;
    foreach ($array as $value) {
        if (in_array($value, $array2)) {
            $resultCount += 1;
        } else {
            $array2[] = $value;
        }
    }

    return $resultCount;
}

$array = array(1,2,3,4,5,61,2,4);
echo getCountOfSimilarElementsInArray($array);

// 8
function getCountOfSimilarElementsInArrays($array, $array2)
{
    $resultCount = 0;
    foreach ($array as $value) {
        if (in_array($value, $array2)) {
            $resultCount += 1;
        }
    }

    return $resultCount;
}

$array = array(1,2,3,4,5,61,2,4);
$array2 = array(1,55,3);
echo getCountOfSimilarElementsInArrays($array, $array2);

// 8
function doSomething($array)
{
    foreach ($array as $key => $value) {
        if ($value < 10) {
            $array[$key] = 99910;
        } elseif ($value > 10 && $value < 25) {
            $array[$key] = 9991025;
        } elseif ($value == 64) {
            break;
        } elseif ($value > 25 && $value % 2 == 0) {
            $array[$key] = 9992;
        } elseif ($value > 25 && $value % 2 != 0) {
            $array[$key] = 9991;
        }
    }
    return $array;
}

$array = array(2, 17, 49, 50, 64, 2, 17);

echo '<pre>';
print_r(doSomething($array));
echo '</pre>';