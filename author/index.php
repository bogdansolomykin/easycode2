<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'query.php';
?>

<?php
require_once 'forms/add_author.php';
?>

<?php
$rows = getAuthorsWithBookCount();
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
                <a href="author.php?id=<?= $author['id'] ?>"><?= $author['name'] ?></a>
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