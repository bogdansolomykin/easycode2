<?php
// Первый массив
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
        ),
        'toyota' => array(
            'models' => array(
                'camry' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'corolla' => array(
                    'years' => array(
                        2003,
                        2004
                    )
                )
            )
        )
    )
);
// решение через foreach
foreach ($carCenter['brands'] as $brandName => $models){
    echo "\n\nModel: $brandName";
        foreach ($models['models'] as $modelName => $year){
            echo "\nBrands: $modelName\n";
            echo "Years: ";
                foreach ($year['years'] as $yearList => $data){
                    echo "$data, ";
            }
        }
}
// решение через foreach и for
foreach ($carCenter['brands'] as $brandName => $models){
    echo "\n\nModel: $brandName";
        foreach ($models['models'] as $modelName => $year){
            echo "\nBrands: $modelName, \n";
            echo "Years: ";
                $arrayCount = count($carCenter['brands'][$brandName]['models'][$modelName]['years']);
                for($i = 0; $i <= $arrayCount - 1; $i++ ){
                echo $carCenter['brands'][$brandName]['models'][$modelName]['years'][$i] . ", ";
                }
        }
};

//Второй массив
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

// решение через foreach и for
foreach ($carCenter as $brandName => $models){
    echo "\n\nModel: $brandName";
        foreach ($models as $modelName => $year){
            echo "\nBrands: $modelName\n";
            echo "Years: ";
                $arrayCount = count($carCenter[$brandName][$modelName]);
                for($i = 0; $i <= $arrayCount - 1; $i++ ){
                echo $carCenter[$brandName][$modelName][$i] . ", ";
                }
        }
};