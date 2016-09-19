<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('location: index.php');

require_once 'query.php';

if(isset($_GET['idToDelete'])) {
	$idToDelete = $_GET['idToDelete'];
    deleteAuthorById($idToDelete);
}

