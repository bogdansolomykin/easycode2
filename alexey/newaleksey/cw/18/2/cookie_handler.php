<?php
$login = $_GET['login'];
$time = time() + $_GET['time'];
$date = date('Y-m-d H:i:s');
setcookie('login', $login, $time);
setcookie('lastLoginTime', $date, $time);
?>

<a href="index.php">Вернуться назад</a>
