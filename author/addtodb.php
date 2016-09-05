<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db.php';

$connectionObject = getDbConnection();

if(isset($_POST['name']) && $_POST['name'] != '' && $_POST['age'] != '') {
    $name = trim($_POST['name']);
    $name = addslashes($name);
    // $name = mysql_real_escape_string($name);
    $age = trim($_POST['age']);
    $newAuthor = mysqli_query($connectionObject,
        "INSERT INTO `author` (name, age) VALUES ('$name', '$age');"
    );
    // if($newAuthor) {
    // 	echo 'В БД добавлен автор: ' . $name . ', возраст: ' . $age;
    // }
}

header('location: index.php');