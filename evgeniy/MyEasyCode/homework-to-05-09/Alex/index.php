<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<form action="addnewauthor.php" method="">
    Author: <input type="text" name="author">
    Age: <input type="text" name="age">
    <input type="submit" value="send">
</form>

<?php
$connectionObject = mysqli_connect("localhost", "root", "28fKq179tZm50", "evgeniy");

$resource = mysqli_query($connectionObject, 
"SELECT a.id, a.name, a.age, COUNT(ab.author_id = ab.book_id) AS bookQuantity 
FROM author AS a
LEFT JOIN author_book AS ab
ON a.id = ab.author_id
GROUP BY a.id;"
);

$rows = array();
while (true) {
    $row = mysqli_fetch_assoc($resource);
    if ($row === null) {
        break;
    }
    $rows[] = $row;
}
//echo '<pre>';
//print_r($rows);
//echo '</pre>';
?>

<table>
    <tr class="tabl_title">
        <td>ID</td><td>Name</td><td>Age</td><td>Book quantity</td>
    </tr>
    <?php foreach ($rows as $key => $aut_tabl): ?>
    <tr>
        <td><?= $aut_tabl['id'] ?></td>
        <td><a href="authorbooks.php?id=<?=$aut_tabl['id']?>"><?= $aut_tabl['name'] ?></a></td>
        <td><?= $aut_tabl['age'] ?></td>
        <td><?= $aut_tabl['bookQuantity'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
