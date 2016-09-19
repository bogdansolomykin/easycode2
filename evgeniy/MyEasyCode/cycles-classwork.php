<?php
/* $carBrands = array('BMW', 'Audi', 'Mercedes', 'Volvo', 'Lexus', 'Tesla', 'Porsche');
$arrayCount = count($carBrands);
for ($i = $arrayCount - 1; $i >= 0; $i--) {
	echo $carBrands[$i] . ', ';
} */
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
foreach ($carCenter['brands'] as $brandName => $models) {
    foreach ($models['models'] as $modelName => $years) {
    	foreach ($years['years'] as $key => $year) {
        echo $year . ', ';
    	}
    }
}