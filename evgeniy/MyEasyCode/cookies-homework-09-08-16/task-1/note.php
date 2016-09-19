<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

if ((isset($_GET['seeTime'])) && ($_GET['timeLeft'] != '') && (count($_COOKIE) > 0)) {
    echo 'До удаления заметки осталось: ';
    echo $_GET['timeLeft'] - time();
    echo ' секунд';
} elseif ((isset($_GET['seeTime'])) && ($_GET['timeLeft'] != '') && (count($_COOKIE) == 0)) {
	echo 'Время куки истекло';
} else {
	echo 'Что-то пошло не так:(';
}
?>
<br />
<!-- <a href="cookiehandler.php">Назад</a><br /> -->
<a href="index.php">На главную</a>