<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('location: index.php');

$connectionObject = mysqli_connect("localhost", "root", "28fKq179tZm50", "evgeniy");

if(isset($_POST['idToDelete'])) {
	$id = $_POST['idToDelete'];
	$newAuthor = mysqli_query($connectionObject, "DELETE FROM `author` WHERE `id` = $id;"
	);
}