
<?php
require_once 'cookie.php';

if (isset($_GET['header']) && $_GET['header'] != '') {
    saveData($_GET['header'], $_GET['text'], $_GET['img']);
}
header('location: index.php');
?>
