<?php
$countries = array(
    1 => array(
        'name' => 'Ukraine',
        'population' => 46000000,
        'language' => array('ukrainian', 'russian'),
        'cities' => array(
            array(
                'name' => 'Kiev',
                'population' => 2500000
            ),
            array(
                'name' => 'Kharkov',
                'population' => 1500000
            ),
            array(
                'name' => 'Odessa',
                'population' => 1700000
        )
      )  
    )
);
echo '<pre>';
print_r($countries);
echo '</pre>';
echo $countries[1]['cities'][2]['population'] . "\r\n";
$countries[1]['cities'][] = array('name' => 'Dnepr', 'population' => 1400000);
echo '<pre>';
print_r($countries);
echo '</pre>';
$countries[] = array(
        'name' => 'Georgia',
        'population' => 5000000,
        'language' => array('georgian', 'english', 'russian'),
        'cities' => array(
            array('name' => 'Tbilisi', 'population' => 700000),
            array('name' => 'Batumi', 'population' => 500000)
          )
        );
echo '<pre>';
print_r($countries);
echo '</pre>';
$country = array(); // добавление еще одной страны
$country['name'] = 'France'; // добавление элемента с названием
$country['population'] = 67000000; // добавление элемента с численностью населения
$country['language'] = 'french'; // добавление элемента с языком
$country['cities'] = array(); // добавление массива для городов
$country['cities'][] = array('name' => 'Paris'); // добавление в массив с городами нового элемента - города Париж
$country['cities'][] = array('name' => 'Marsel');
$country['cities'][] = array('name' => 'Lion');
$country['cities'][0]['population'] = 2200000; // добавление Парижу элемента с численностью населения
$country['cities'][1]['population'] = 900000;
$country['cities'][2]['population'] = 500000;
echo '<pre>';
print_r($country);
echo '</pre>';
$countries[] = $country; // добавление массива $country (Франции) очередным элементом в массив $countries (все страны)
echo '<pre>';
print_r($countries);
echo '</pre>';