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
echo print_r(array_keys($carCenter));