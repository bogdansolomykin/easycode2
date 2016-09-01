<?php

$connectionObject = mysqli_connect("localhost", "root", "123", "bogdan"); // создаем соединение с базой данных
$resource = mysqli_query($connectionObject, "SELECT * FROM author"); // выполянем запрос к базе, указывая при этом какое соединение использовать

$rows = array();
while (true) {
    $row = mysqli_fetch_assoc($resource);
    if ($row === null) {
        break;
    }

    $rows[] = $row;
}

print_r($rows);
