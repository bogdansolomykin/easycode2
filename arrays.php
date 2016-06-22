<?php
// обычный массив
$someArray = array(
	1, 
	2, 
	3
);

// ассоциативный массив
$arrayAssoc = array(
    'key1' => 'value1',
    'key2' => 'value2'
);

// ассоциативный многомерный массив
$house = array(
	'people' => array(
		array(
			'name' => 'Somename1'
		),
		array(
            'name' => 'Somename2' 
		)
	)
);

$array = array(100 => 1, 'aomw atring');
$array[3] = 3;
$array[] = 2;

echo "\n";
print_r($array);