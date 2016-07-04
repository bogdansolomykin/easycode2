<?php
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
                'corolla' => array(
                    'years' => array(
                        1994,
                        2009
                    )
                ),
                'camry' => array(
                    'years' => array(
                        2010,
                        2012
                    )
                )
            )
        )
    )
);
foreach ($carCenter['brands'] as $brandName => $brandData) {
    $years = array();
    echo 'Brand: ' . $brandName;
    echo "<br />";
    echo 'Models: ';
    foreach ($brandData['models'] as $modelName => $modelData) {
        echo $modelName . ',';
        foreach ($modelData['years'] as $year) {
            $years[] = $year;
        }
    }
    echo "<br />";
    echo 'Years: ';
//    foreach ($years as $year) {
//        echo $year . ',';
//    }
    $countYears = count($years);
    for ($i = 0; $i < $countYears; $i++) {
        echo $years[$i] . ',';
    }
    echo "<hr />";
}