<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$time = time() + 60 * 60 * 24 * 31;
if (isset($_GET['doNotShow'])) {
    setcookie('doNotShow', 'image', $time);
}

?>

<a href="image.php">Вернуться назад</a>