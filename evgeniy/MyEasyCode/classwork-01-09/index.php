<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<form action="" name="authors" method='POST'>
    Имя автора: <input type="text" name="name">
    Возраст: <input type="text" name="age">
    <input type="submit" value="Save">
</form>

<?php
$connectionObject = mysqli_connect("localhost", "root", "28fKq179tZm50", "evgeniy");

if(isset($_POST['name']) && $_POST['name'] != '' && $_POST['age'] != '') {
	$name = $_POST['name'];
	// $name = mysql_real_escape_string($name);
	$age = $_POST['age'];
	$newAuthor = mysqli_query($connectionObject, "INSERT INTO `author` (name, age) VALUES ('$name', '$age');"
	);
 	if($newAuthor) {
 		echo 'В БД добавлен автор: ' . $name . ', возраст: ' . $age;
 	}
}

$resource = mysqli_query($connectionObject, 
	"SELECT
   `a`.`id`, `a`.`name`, `a`.`age`, count(*) AS `booksQuantity`
FROM `author` AS `a`
LEFT JOIN `author_book` AS `ab`
  ON `a`.`id` = `ab`.`author_id`
  GROUP BY `a`.`id`, `a`.`name`, `a`.`age`;"
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
    </tr>

<?php endforeach; ?>

</table>