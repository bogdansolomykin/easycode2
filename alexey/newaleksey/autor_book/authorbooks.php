<head>
    <link rel="stylesheet" href="style.css">
</head>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connectionObject = mysqli_connect('localhost', 'root', '123', 'aleksey');
$authorId = $_GET['id'];
$resourse = mysqli_query($connectionObject, "SELECT a.name, b.title AS  bt
FROM author AS a
INNER JOIN author_book AS ab
ON a.id = ab.author_id
INNER JOIN book AS b
ON ab.book_id = b.id
WHERE a.id = $authorId");

$rows = array ();
while(true)
{
$row = mysqli_fetch_assoc($resourse);
    if($row === null)
    {
        break;
    }
    $rows[] = $row;
}
echo '<pre>';
print_r($rows);
echo '<pre>';
echo 'Перечень книг написанный автором: ' . $rows[0]['name'];
//?>

<table>
    <?php foreach ($rows as $key => $values){ ?>
        <tr>
            <td><?= $values['bt'] ?></td>
        </tr>
    <?php } ?>
</table>
<a href="index.php"> Вернуться к перечню авторов</a>
