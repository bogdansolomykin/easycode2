<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<a href="index.php">На главную</a><br />

<?php
if((isset($_GET['idToEdit'])) && (isset($_GET['name'])) && (isset($_GET['age']))) {
	$idToEdit = $_GET['idToEdit'];
	$name = $_GET['name'];
	$age = $_GET['age'];

    require_once 'forms/editauthorform.php';

} else {
    echo 'Вернитесь к выбору автора для редактирования!';
}

