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