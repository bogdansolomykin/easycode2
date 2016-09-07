<?php

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
function fetchAll($sql) {
    $connectionObject = getDbConnection();
    $resource = mysqli_query($connectionObject, $sql);

    $rows = array();
    while (true) {
        $row = mysqli_fetch_assoc($resource);
        if ($row === null) {
            break;
        }

        $rows[] = $row;
    }

    return $rows;
}

function insert($tableName, $params) {
    $keyArray = array();
    $valueArray = array();
    foreach ($params as $key => $value) {
        $keyArray[] = "`" . $key . "`";
        $valueArray[] = "'" . $value . "'";
    }

    $columns = implode(",", $keyArray);
    $values = implode(",", $valueArray);

    $sql = "INSERT INTO `{$tableName}` ({$columns}) VALUES ($values)";

    $connectionObject = getDbConnection();
    mysqli_query($connectionObject, $sql);
}

function delete($tableName, $condition) {
    $sql = "DELETE FROM {$tableName} WHERE {$condition}";
    $connectionObject = getDbConnection();
    mysqli_query($connectionObject, $sql);
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