<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['changeImageURL']) && $_GET['newImageURL'] != '') {
    setcookie('newImageURL', $_GET['newImageURL']);
}
?>

<a href="index.php">Вернуться назад</a>