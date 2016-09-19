<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
    <!--HTML part "View table author" -->
    <form action="" name="addToBase" method="GET">
        Имя автора:     <input type="text" name="author"> <br>
        Возраст автора: <input type="text" name="age"> <br>
        <input type="submit" name="addButton" value="добавить" >
    </form>

<?php
//Host and User Data
$host ='localhost';
$user = 'root';
$pass = '28fKq179tZm50';
$base = 'evgeniy';

// Connection to DB
$connectionObject = mysqli_connect($host, $user, $pass, $base);
    if ($connectionObject) {
        echo "connect to DB ok";
    } else {
        echo "file to connect DB";
    };

//request


$sql = "SELECT 
            `a`.`id`, 
            `a`.`name`,
            `a`.`age`,
            COUNT(`ab`.`author_id`) AS `booksQuantity`             
            FROM `author` AS `a`
            LEFT JOIN `author_book` AS `ab`
            ON 
            `a`.`id` = `ab`.`author_id`
            GROUP BY `a`.`id`;
            ";

$resource = mysqli_query($connectionObject, $sql);

//receiving data

$rows = array();
while ($row = mysqli_fetch_assoc($resource)){
    $rows[] = $row;
};

//Add author to DB
if(isset($_GET['author']) && $_GET['author'] !='' && $_GET['age'] !=''){
    $name = $_GET['author'];
    $age = $_GET['age'];
    $addDataToBase = "INSERT INTO `author` (`name`, `age`) VALUES ('$name','$age');";
    $saveToBase = mysqli_query($connectionObject, $addDataToBase);
    if($saveToBase){
        echo "Автор добавлен успешно";
    } else {
        echo "Ошибка добавления в базу";
    }
};

//echo '<br />';
//echo '<pre>';
//print_r($rows);
//echo '</pre>';

?>

    <table border="1">
        <tr>
            <th> № </th>
            <th> Имя Автора </th>
            <th> Возраст </th>
            <th> Кол-во книг </th>
            <th> Удалит автора </th>
        </tr>
        <?php foreach ($rows as $index => $author) : ?>
            <tr>
                <td> <?= $author ['id'] ?> </td>
                <td> <?= $author ['name'] ?> </td>
                <td> <?= $author ['age'] ?> </td>
                <td> <?= $author ['booksQuantity'] ?> </td>
                <td>
                    <form action="" name="deleteAuthor" method="GET">
                        <input type="hidden" name="delAuthorId" value="<?= $author['id'] ?>">
                        <input type="submit" name="delete"  value="Удалить">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php
//delete author from Db
if(isset($_GET['delAuthorId'])) {
    $delId = $_GET['delAuthorId'];
    $delFromDB = mysqli_query($connectionObject, "DELETE FROM `author` WHERE `id` = $delId");
};
?>