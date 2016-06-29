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
        )
    )
);
$carCenter['brands']['bmw']['models']['m6']['years'];

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

// 1. использовать for и foreach
// 2. использовать два вида массива
// 3. нужно вывести данные в таком формате:
Model: bmw
Brands: m5, m6
years: 1999, 2001
-----------------
Model: toyota
Brands: camry
years: 1999