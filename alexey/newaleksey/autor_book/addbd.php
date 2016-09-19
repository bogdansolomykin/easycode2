<?php
$connectionObject = mysqli_connect("localhost", "root", "123", "aleksey"); // создаем соединение с базой данных

$author = $_GET['author'];
$age = $_GET['age'];
if(isset($author) && $author != "" && $age != "")
{
    $newAuthor = mysqli_query($connectionObject, "INSERT INTO `author` (name, age) VALUES ('$author', '$age')");
    if($newAuthor)
    {
        echo 'В базу добавлен Автор: ' . $author . ' с возрастом: ' . $age;
    }
    else
    {
        echo 'В базу не добавлена информация';
    }
}
else
{
    echo "Не все поля заполнены";
}
header('location: index.php');