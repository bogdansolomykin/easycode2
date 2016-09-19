<head>
    <link rel="stylesheet" href="style.css">
</head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connectionObject = mysqli_connect("localhost", "root", "28fKq179tZm50", "evgeniy");

if(isset($_GET['id']) && $_GET['id'] != '') {

	$authorId = $_GET['id'];
	$resourse = mysqli_query($connectionObject, "SELECT `a`.`name` AS `authorName`, `b`.`title` AS `bookTitle`
	FROM `author` AS `a`
	LEFT JOIN `author_book` AS `ab`
	ON `a`.`id` = `ab`.`author_id`
	LEFT JOIN `book` AS `b`
	ON `ab`.`book_id` = `b`.`id`
	WHERE `a`.`id` = '{$authorId}';");

	$rows = array ();
	while(true) {
		$row = mysqli_fetch_assoc($resourse);
		    if($row === null)
		    {
		        break;
		    }
		    $rows[] = $row;
    }

	echo 'Перечень книг автора ' . $rows[0]['authorName'];
    // echo '<pre>';
    // print_r($rows);
    // echo '</pre>';
    ?>

    <table>
        <tr>
            <td>Books:</td>
        </tr>
    <?php foreach ($rows as $key => $values): ?>
        <tr>
            <td><?= $values['bookTitle'] ?></td>
        </tr>
    <?php endforeach; ?>
	</table>

	<a href="index.php"> Вернуться к перечню авторов</a>

<?php
}
?>
