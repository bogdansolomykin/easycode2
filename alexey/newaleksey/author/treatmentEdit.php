<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'query.php';
$newName = addslashes(trim($_GET['AuthorNameEdit']));
$newAge = trim($_GET['AuthorAgeEdit']);
$id = $_GET['AuthorId'];
if(isset($newName)){
    if(is_numeric($newAge)){
        updateAuthorById ($id, $newName,$newAge);
        header('location: index.php');
    }
    else{
        echo 'Введите в поле возвраст числовое значение'; ?>
        <a href="Editdb.php?id=<?= $id ?>">К форме редактирования</a>
      <?php
    }
}
else{
    echo 'Вы не выбрали автора'; ?>
    <a href="index.php">К выбору автора</a>
    <?php
}
