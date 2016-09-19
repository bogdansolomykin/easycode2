<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('location: index.php');

require_once 'db.php';

$connectionObject = getDbConnection();

if(isset($_POST['idToDelete'])) {
    $id = $_POST['idToDelete'];
    $newAuthor = mysqli_query($connectionObject, "DELETE FROM `author` WHERE `id` = $id;"
    );
}