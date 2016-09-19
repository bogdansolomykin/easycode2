<style type="text/css">
    TABLE {
        border-collapse: collapse;
        border: 2px solid white;
    }
    TD {
        padding: 3px;
        border: 1px solid black;
    }
</style>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'query.php';

require_once 'forms/addnewauthor.php';

$rows = getAuthorsWithBooksQuantity();
?>

<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Books quantity</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    
<?php foreach($rows as $index => $author): ?>

	<tr>
    	<td><?= $author['id'] ?></td>
    	<td>
        <a href="author.php?id=<?=$author['id']?>&name=<?=$author['name']?>"><?=$author['name']?></a>
    	</td>
    	<td><?= $author['age'] ?></td>
    	<td><?= $author['booksQuantity'] ?></td>
        <td>
            <form action="deletefromdb.php" name="formForDelete" method="GET">
               <input type="hidden" name="idToDelete" value="<?= $author['id'] ?>">
               <input type="submit" value="Delete from DB">
            </form>
        </td>
        <td>
            <form action="editauthor.php" name="formForEdit" method="GET">
                <input type="hidden" name="idToEdit" value="<?= $author['id'] ?>">
                <input type="hidden" name="name" value="<?= $author['name'] ?>">
                <input type="hidden" name="age" value="<?= $author['age'] ?>">
                <input type="submit" value="Edit author">
            </form>
        </td>
    </tr>

<?php endforeach; ?>

</table>