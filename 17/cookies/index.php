<?php
$time = time() + 60 * 60 * 24 * 7; // время жизни неделя
setcookie('cookie1', $_GET['cookie'], $time);
