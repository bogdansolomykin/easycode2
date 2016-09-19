<?php
$time = time() + 60 * 60 * 7;
setcookie('cookieTest1', $_POST['name'], $time);
setcookie('cookieTest2', $_POST['lastname'], $time);