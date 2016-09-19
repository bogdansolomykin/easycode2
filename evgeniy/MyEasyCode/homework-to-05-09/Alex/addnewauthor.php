<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('location: index.php');

$connectionObject = mysqli_connect("localhost", "root", "28fKq179tZm50", "evgeniy");

$author = $_GET['author'];
$age = $_GET['age'];
if(isset($author) && $author != "" && $age != "") {
    $newAuthor = mysqli_query($connectionObject, "INSERT INTO `author` (name, age) VALUES ('$author', '$age');");
}