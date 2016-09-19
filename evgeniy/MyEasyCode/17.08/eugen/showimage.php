<?php
require_once 'cookie.php';

if (isset($_GET['noteNameShowAgain'])) {
    hideNoteImage($_GET['noteNameShowAgain'], '', -1);
}

header('location: index.php');
?>
