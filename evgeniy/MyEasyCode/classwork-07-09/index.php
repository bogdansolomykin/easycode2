<?php

$params = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
    'key4' => 'value4'
);

//echo '<pre>';
//print_r($params);
//echo '</pre>';

// $columns; // `key1`, `key2`
// $values; // 'value1', 'value2'

/*
$keysArray = [];
$valuesArray = [];
foreach ($params as $key => $value) {
    $keysArray[] = "`" . $key . "`";
    $valuesArray[] = "'" . $value . "'";
}

echo '<pre>';
print_r($keysArray);
echo '</pre>';

echo '<pre>';
print_r($valuesArray);
echo '</pre>';

$keysCollector = implode(", ", $keysArray);
echo $keysCollector;
echo '<br />';
$valuesCollector = implode(", ", $valuesArray);
echo $valuesCollector;
*/

function insert($tableName, $params) {
    $columns = implode(
        ', ',
        array_map(function($element) {
            return '`' . $element . '`';
        }, array_keys($params))
    );
    $values = implode(
        ', ',
        array_map(function($element) {
            return "'" . $element . "'";
        }, array_values($params))
    );
    $sql = "INSERT INTO `{$tableName}` ($columns) VALUES ($values)";
    echo $sql;exit;
}

insert('table', $params);