<?php
$time = time() + 60 * 60 * 24;
setcookie('name', $_GET['name'], $time);

if (isset($_COOKIE['name'])) {
	echo 'Привет, ' . $_COOKIE['name'] . '!';
} else {
	echo 'Привет, ' . $_GET['name'] . '!';
}
