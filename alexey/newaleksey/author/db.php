<?php
// В данном файле мы обрабатываем sql запросы
require_once 'config.php';

function getDbConnection() {
    $connectionObject = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$connectionObject) {
        die("Не удалось подключиться к базе данных MYSQL!");
    }

    return $connectionObject;
}

/**
 * @param string $sql
 * @return array
 */
function fetchAll($sql) { // Преобразовываем sql запрос в массив
    $connectionObject = getDbConnection();
    $resource = mysqli_query($connectionObject, $sql); //запрос к базе данных

    $rows = array();
    while (true) {
        $row = mysqli_fetch_assoc($resource); //Извлекает результирующий ряд в виде ассоциативного массива
        if ($row === null) {
            break;
        }

        $rows[] = $row;
    }

    return $rows;
}


function insert($tableName, $params) { // Вставляем в БД инфу. $params - массив с данными
    $keyArray = array();
    $valueArray = array();
    foreach ($params as $key => $value) {
        $keyArray[] = "`" . $key . "`"; // `name`, `age`
        $valueArray[] = "'" . $value . "'"; // '$name', '$age'
    }

    $columns = implode(", ", $keyArray); // Объединяет элементы массива в строку
    $values = implode(", ", $valueArray);

    $sql = "INSERT INTO `{$tableName}` ({$columns}) VALUES ($values)";

    $connectionObject = getDbConnection();
    mysqli_query($connectionObject, $sql);
}

function delete($tableName, $condition) {
    $sql = "DELETE FROM {$tableName} WHERE {$condition}";
    $connectionObject = getDbConnection();
    mysqli_query($connectionObject, $sql);
}

//function update($tableName, $id, $newName, $newAge){
//    $sql = "UPDATE {$tableName} SET {$newName} WHERE {$id}; UPDATE {$tableName} SET {$newAge} WHERE {$id};";
//    $connectionObject = getDbConnection();
//    mysqli_query($connectionObject, $sql);
//}

//function update($tableName, $id, $params){
//    foreach ($params as $key => $value){
//        $sql = "UPDATE $tableName SET $value  WHERE `id` = $id;";
//        $connectionObject = getDbConnection();
//        mysqli_query($connectionObject, $sql);
//    }
//}

function updateById($tableName, $params){
    foreach ($params as $key => $value){
        foreach ($value as $val){
            $sql = "UPDATE $tableName SET $val  WHERE `id` = $key;";
            $connectionObject = getDbConnection();
            mysqli_query($connectionObject, $sql);
        }

    }
}

//function insert($tableName, $params) {
//    $columns = implode(
//        ', ',
//        array_map(function($element) {
//            return '`' . $element . '`';
//        }, array_keys($params))
//    );
//
//    $values = implode(
//        ', ',
//        array_map(function($element) {
//            return "'" . $element . "'";
//        }, array_values($params))
//    );
//
//    $sql = "INSERT INTO `{$tableName}` ({$columns}) VALUES ($values)";
//    $connectionObject = getDbConnection();
//    mysqli_query($connectionObject, $sql);
//}
