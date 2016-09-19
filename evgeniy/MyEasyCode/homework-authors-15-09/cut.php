<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'query.php';

if(isset($_GET['choosenToCutBooks']) && $_GET['choosenToCutBooks'] != '') {
	$authorID = $_GET['authorID'];
	$authorName = $_GET['authorName'];
	$choosenToCutBooks = $_GET['choosenToCutBooks'];
	// echo '<pre>';
	// print_r($choosenToCutBooks);
	// echo '</pre>';
	$booksCount = count($choosenToCutBooks); // [1,2,3]
	$bookIds = implode(', ', $choosenToCutBooks); // '1,2,3'
	cutBooks($authorID, $bookIds);
	echo 'Вероятно, всё прошло ОК!) <br />';
	echo "Должно быть удалено {$booksCount} книг <br />";
	?>
	<a href="author.php?id=<?=$authorID?>&name=<?=$authorName?>">Вернуться на страницу автора</a><br />
	<?php
} else {
	echo 'Что-то пошло не так:( Вернитесь к выбору книг для удаления<br />';
}
?>
<a href="index.php">На главную</a>