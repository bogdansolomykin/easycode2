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

// 1. хранить информацию о преподавателе(имя)
// 2. хранить информацию о студентах(имя)
// использовать 1 массив
$school = array(
    'teacher' => array(
        'name' => 'BOgdan',
        'lastname' => 'sol'
    ),
    'students' => array(
        array(
            'name' => 'Sergey'
        ),
        array(
            'name' => 'Sasha'
        )
    )
);
// 1. Нужно о странах (стран больше чем 1)
// 2. У стран есть такие свойства, как: население, язык, название
// 3. У стран есть города
// 3.1 У каждого города есть название и население
// можно использовать 1 переменную
$countries = array(
	1 => array(
		'name' => 'Ukraine',
		'cities' => array(
			array(
                'name' => 'Kiev' 
			),
			array()	
		)  
	)
);
echo $countries[1]['cities'][0]['name'];

$city = array(
	'name' => 'Kharkiv',
	'population' => 100500
);

