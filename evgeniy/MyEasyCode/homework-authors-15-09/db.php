<?php

require_once 'config.php';

function getDbConnection() {
	$connectionObject = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$connectionObject) {
		die("Невозможно подключение к MySQL");
	}

	return $connectionObject;
}

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

function delete($tableName, $condition) {
    $sql = "DELETE FROM `{$tableName}` WHERE {$condition}";
    $connectionObject = getDbConnection();
    mysqli_query($connectionObject, $sql);
}

function insert($tableName, $params) {
    $keysArray = [];
    $valuesArray = [];
    foreach ($params as $key => $value) {
        $keysArray[] = "`" . $key . "`";
        $valuesArray[] = "'" . $value . "'";
    }
    $columns = implode(", ", $keysArray);
    $values = implode(", ", $valuesArray);
    $sql = "INSERT INTO `{$tableName}` ($columns) VALUES ($values)";
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
//    $values = implode(
//        ', ',
//        array_map(function($element) {
//            return "'" . $element . "'";
//        }, array_values($params))
//    );
//    $sql = "INSERT INTO `{$tableName}` ($columns) VALUES ($values)";
//    $connectionObject = getDbConnection();
//    mysqli_query($connectionObject, $sql);
//}