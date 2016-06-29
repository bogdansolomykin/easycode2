<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// increment
//$i = 1;
//echo '$i before: ' . $i;
//echo '<br />';
//$i = $i + 1;
//echo '$i after "$i = $i + 1;": ' . $i;
//echo '<br />';
//$i += 1;
//echo '$i after "$i += 1;": ' . $i;
//echo '<br />';
//echo '$i after "$i++;": ' . $i++;
//echo '<br />';
//echo '$i after "++$i;": ' . ++$i;
//echo '<br />';

// for
//$array = array('word', 2, 3, 'four', 5, 6, 7, 8, 9);
//$arrayCount = count($array); // получить кол-во элементов в массиве
//for ($i = 0; $i < $arrayCount; $i++) { // 10
//    echo $array[$i];
//    echo "<br />";
//}

//1. создать массив, в котором есть перечень автомобильных брендов
//2. вывести все бренды(начиная с конца) через запятую на экран
//$carBrands = array('BMW', 'Audi', 'Mercedes', 'Volvo', 'Lexus', 'Tesla', 'Porsche');
//$arrayCount = count($carBrands);
//for($i = $arrayCount - 1; $i >= 0; $i--) {
//    echo $carBrands[$i] . ', ';
//}

// foreach
//$array = ['a' => 'bmw', 'b' =>  'toyota', 'c' => 'mercedes'];
//foreach ($array as $key => $element) {
//    echo 'key: ' . $key;
//    echo ', value: ' . $element . '<br />';
//}

//$carCenter = [
//    'bmw' => array(
//        'm5' => array(
//            1999,
//            2001
//        ),
//        'm6' => array(
//            2001,
//            2002
//        )
//    ),
//    'toyota' => array(
//        'camry' => array(1999)
//    )
//];
//foreach ($carCenter as $brandName => $models) {
//    echo 'Brand: ' . $brandName . "\r\n";
//    echo 'Models: ';
//    foreach ($models as $modelName => $modelYears) {
//        echo $modelName . ',';
//    }
//    echo "\r\n";
//}

$carCenter = array(
    'brands' => array(
        'bmw' => array(
            'models' => array(
                'm5' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'm6' => array(
                    'years' => array(
                        2001,
                        2002
                    )
                )
            )
        )
    )
);
// вывести все бренды (bmw)
foreach ($carCenter['brands'] as $brandName => $models) {
    echo $brandName . ',';
}

// while do

// do while
