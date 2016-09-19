<?php
$time = time() + 60 * 60;
$date = date("d-m-Y H:i:s");
setcookie('login', $_GET['login'], $time);
setcookie('visitTime', $date, $time);
?>

Куки созданы. Нажмите на <a href="login.php">эту ссылку</a>.