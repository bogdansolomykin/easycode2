<?php
$login = $_GET['login'];
$time = time() + 20;
$date = date('Y-m-d H:i:s');
setcookie('login', $login, $time);
setcookie('lastLoginTime', $date, $time);
?>

<a href="form.php">Вернуться назад</a>
