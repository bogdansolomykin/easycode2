<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<a href="index.php">На главную</a><br />

<?php
require_once 'query.php';

if((isset($_GET['idAuthorToEdit'])) && ($_GET['newName'] != '') && ($_GET['newAge'] != '')) {
	$idAuthorToEdit = $_GET['idAuthorToEdit'];
	$newName = trim($_GET['newName']);
	$newName = addslashes($newName);
	$newAge = trim($_GET['newAge']);
	if(is_numeric($newAge)) {
		editAuthor($idAuthorToEdit, $newName, $newAge);
		echo 'Редактирование прошло успешно (скорее всего)!';
	} else {
		echo 'Указанный возраст не является числовым значением!';
	}
} else {
	echo 'Недостаточно данных для редактирования!';
}



