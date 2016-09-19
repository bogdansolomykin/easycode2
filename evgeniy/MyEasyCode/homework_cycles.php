<?php
/*
Задание:
1. использовать for и foreach
2. использовать два вида массива
3. нужно вывести данные в таком формате:
Model: bmw
Brands: m5, m6
years: 1999, 2001
-----------------
Model: toyota
Brands: camry
years: 1999
*/
// Массив 1:
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
// Решение (вариант 1):
foreach ($carCenter['brands'] as $brandName => $models) {
    echo 'Brands: ' . $brandName;
    foreach ($models['models'] as $modelName => $years) {
        echo "\r\nModel: ";
        echo $modelName . ', ';
        echo "\r\nYears: ";
        $yearsCount = count($years['years']);
        for ($i = 0; $i < $yearsCount; $i++) {
            echo $years['years'][$i] . ', ';
        }
    }
    echo "\r\n---------------\r\n";
}
// Решение (вариант 2):
foreach ($carCenter['brands'] as $brandName => $models) {
    echo 'Brands: ' . $brandName;
    echo "\r\nModel: ";
    foreach ($models['models'] as $modelName => $years) {
        echo $modelName . ', ';
    }
        echo "\r\nYears: ";
        $yearsCount = count($years['years']);
        for ($i = 0; $i < $yearsCount; $i++) {
            echo $years['years'][$i] . ', ';
        }    
    echo "\r\n---------------\r\n";
}
// Массив 2:
$carCenter = array(
    'bmw' => array(
        'm5' => array(
            1999,
            2001
        ),
        'm6' => array(
            2001,
            2002
        )
    ),
    'toyota' => array(
        'camry' => array(1999)
    )
);
// Решение (вариант 1):
foreach ($carCenter as $brandName => $models) {
    echo 'Brands: ' . $brandName;
    foreach ($models as $modelName => $years) {
        echo "\r\nModel: ";
        echo $modelName . ', ';
        echo "\r\nYears: ";
        $yearsCount = count($years);
        for ($i = 0; $i < $yearsCount; $i++) {
            echo $years[$i] . ', ';
        }
    }
    echo "\r\n---------------\r\n";
}
// Решение (вариант 2):
foreach ($carCenter as $brandName => $models) {
    echo 'Brands: ' . $brandName . "\r\n";
    echo 'Model: ';
    foreach ($models as $modelName => $years) {
        echo $modelName . ', ';
    }
        echo "\r\nYears: ";
        $yearsCount = count($years);
        for ($i = 0; $i < $yearsCount; $i++) {
            echo $years[$i] . ', ';
        }    
    echo "\r\n---------------\r\n";
}