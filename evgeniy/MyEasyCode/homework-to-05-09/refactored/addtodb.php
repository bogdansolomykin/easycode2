<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// header('location: index.php');
?>

<a href="index.php">На главную</a><br />

<?php
require_once 'query.php';

if (isset($_GET['name']) && $_GET['name'] != '' && $_GET['age'] != '') {
	$name = trim($_GET['name']);
	$name = addslashes($name);
	// $name = mysql_real_escape_string($name);
	$age = trim($_GET['age']);
    if (is_numeric($age)) {
        addNewAuthor($name, $age);
        echo 'Автор успешно добавлен!';
    } else {
        echo 'Возраст должен иметь числовое значение!';
    }
} else {
    echo 'Не хватает данных для добавления.';
}
?>