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