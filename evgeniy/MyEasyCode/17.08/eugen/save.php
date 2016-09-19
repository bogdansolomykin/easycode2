<?php
require_once 'cookie.php';

if (isset($_GET['header']) && $_GET['header'] != '') {
    saveData($_GET['header'], $_GET['text']);
}
header('location: index.php');
?>
<a href="index.php">На главную</a>
