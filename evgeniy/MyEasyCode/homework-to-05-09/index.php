<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<form action="addtodb.php" name="authors" method='POST'>
    Имя автора: <input type="text" name="name">
    Возраст: <input type="text" name="age">
    <input type="submit" value="Save">
</form>

<?php
$connectionObject = mysqli_connect("localhost", "root", "28fKq179tZm50", "evgeniy");
if ( !$connectionObject ) die ("Невозможно подключение к MySQL");

$resource = mysqli_query($connectionObject, 
"SELECT `a`.`id`, `a`.`name`, `a`.`age`, count(`ab`.`author_id`) AS `booksQuantity`
FROM `author` AS `a`
LEFT JOIN `author_book` AS `ab`
ON `a`.`id` = `ab`.`author_id`
GROUP BY `a`.`id`;"
);

$rows = array();
while (true) {
    $row = mysqli_fetch_assoc($resource);
    if ($row === null) {
        break;
    }

    $rows[] = $row;
}

// echo '<pre>';
// print_r($rows);
// echo '</pre>';
?>

<table style="border: #000 1px solid">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Books quantity</td>
    </tr>
    
<?php foreach($rows as $index => $author): ?>

	<tr>
    	<td><?= $author['id'] ?></td>
    	<td>
		<form action="author.php" name="authorPage" method='POST'>
		    <input type="submit" name="authorName" value="<?= $author['name'] ?>">
		</form>
    	</td>
    	<td><?= $author['age'] ?></td>
    	<td><?= $author['booksQuantity'] ?></td>
        <td>
        <form action="deletefromdb.php" name="authorPage" method='POST'>
            <input type="hidden" name="idToDelete" value="<?= $author['id'] ?>">
            <input type="submit" name="delete" value="Delete from DB">
        </form>
        </td>
    </tr>

<?php endforeach; ?>

</table>