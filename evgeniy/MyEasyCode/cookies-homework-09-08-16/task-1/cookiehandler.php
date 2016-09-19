<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$time = time() + 30;
$date = date("Y-m-d H:i:s");

if (isset($_GET['saveNote']) && $_GET['header'] != '' && $_GET['text'] != '') {
    setcookie($_GET['header'], $_GET['text'], $time);
    echo 'Заметка сохранена! Время добавления: ' . $date;
	?>
	<form name="notes" action="note.php" method="GET">
		<input type="text" name="timeLeft" value="<?= $time; ?>" /> <!-- Странно подсвечивается -->
		<input type="submit" name="seeTime" value="See time till delete">
	</form>
<?php
} else {
	echo 'Заметка НЕ добавлена!';
}
?>

<br />
<a href="index.php">На главную</a>
