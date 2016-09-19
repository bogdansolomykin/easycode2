<head>
    <link rel="stylesheet" href="style.css">
</head>
<form action="addbd.php" method="">
    Author: <input type="text" name="author">
    Age: <input type="text" name="age">
    <input type="submit" value="send">
</form>

<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$connectionObject = mysqli_connect("localhost", "root", "123", "aleksey"); // создаем соединение с базой данных
//
//$author = $_GET['author'];
//$age = $_GET['age'];
//if(isset($author) && $author != "" && $age != "")
//{
//    $newAuthor = mysqli_query($connectionObject, "INSERT INTO `author` (name, age) VALUES ('$author', '$age')");
//    if($newAuthor)
//    {
//        echo 'В базу добавлен Автор: ' . $author . ' с возрастом: ' . $age;
//    }
//    else
//    {
//        echo 'В базу не добавлена информация';
//    }
//}
//else
//{
//    echo "Не все поля заполнены";
//}

$resource = mysqli_query($connectionObject, "SELECT a.id, a.name, a.age, COUNT(ab.author_id = ab.book_id) as count_book 
FROM author as a
LEFT JOIN author_book as ab
ON a.id = ab.author_id
GROUP BY a.id"); // выполянем запрос к базе, указывая при этом какое соединение использовать

$rows = array();
while (true) {
    $row = mysqli_fetch_assoc($resource);
    if ($row === null) {
        break;
    }

    $rows[] = $row;
}
echo '<pre>';
print_r($rows);
echo '<pre>';
?>

<table>
    <tr class="tabl_title">
        <td>id</td><td>name</td><td>age</td><td>count_book</td>
    </tr>
    <?php foreach ($rows as $key => $aut_tabl) { ?>
    <tr>
        <td><?= $aut_tabl[id] ?></td>
        <td><a href="authorbooks.php?<?= 'id=' . $aut_tabl[id]?>"><?= $aut_tabl[name] ?></a></td>
        <td><?= $aut_tabl[age] ?></td>
        <td><?= $aut_tabl[count_book] ?></td>
    </tr>
    <?php } ?>
</table>