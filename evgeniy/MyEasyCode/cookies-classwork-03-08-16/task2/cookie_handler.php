<?php
$login = $_GET['login'];
$date = date('Y-m-d H:i:s');
$cookiesLifeTime = (int)$_GET['cookiesLifeTime'];
$time = time() + $cookiesLifeTime;
setcookie('login', $login, $time);
setcookie('lastLoginTime', $date, $time);
?>

<a href="form-counter.php">Вернуться назад</a>
