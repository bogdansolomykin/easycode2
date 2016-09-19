<?php
$showroom = array(
    'brands' => array(
        'BMW' => array(
        	'M5' => array(
        		'years' => array(
        		2002,
        		2015
        		)
        	)
        ),
        'Toyota' => array(
        	'Corolla' => array(
           		2002,
        		2015
        	),
        	'Camry' => array(
           		2002,
        		2015
        	)
        )
    )
);
print_r($showroom); // Вывод всего массива
print_r($showroom['brands']['BMW']['M5']['years']); // Вывод годов выпуска БМВ
echo $showroom['brands']['Toyota']['Corolla'][0]."\r\n"; // Вывод годов выпуска Тойоты Короллы
echo $showroom['brands']['Toyota']['Corolla'][1]."\r\n"; // Вывод годов выпуска Тойоты Короллы
echo $showroom['brands']['Toyota']['Camry'][0]."\r\n"; // Вывод годов выпуска Тойоты Кэмри
echo $showroom['brands']['Toyota']['Camry'][1]."\r\n"; // Вывод годов выпуска Тойоты Кэмри
print_r($showroom['brands']['BMW']); // Вывод моделей БМВ
print_r($showroom['brands']['Toyota']); // Вывод моделей Тойоты
print_r($showroom['brands']); // Вывод марок авто