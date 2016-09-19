<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'query.php';

if(isset($_GET['choosenBooks']) && $_GET['choosenBooks'] != '') {
	$authorID = $_GET['authorID'];
	$authorName = $_GET['authorName'];
	$choosenBooks = $_GET['choosenBooks'];
	// echo '<pre>';
	// print_r($_GET);
	// echo '</pre>';
	// echo '<pre>';
	// print_r($choosenBooks);
	// echo '</pre>';
	$n = count($choosenBooks);
	foreach ($choosenBooks as $bookID) {
		addNewBooks($authorID, $bookID);
	}
	echo 'Вероятно, всё прошло ОК!) <br />';
	echo "Должно быть добавлено {$n} книг <br />";
	?>
	<a href="author.php?id=<?=$authorID?>&name=<?=$authorName?>">Вернуться на страницу автора</a><br />
	<?php
} else {
	echo 'Что-то пошло не так:( Вернитесь к выбору книг для добавления<br />';
}
?>
<a href="index.php">На главную</a>