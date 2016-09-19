<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'query.php';

if(isset($_GET['id'])) {
    $authorID = $_GET['id'];
    $authorName = $_GET['name'];
    echo 'Author: ' . $authorName;

    $rows = getAuthorsBooks($authorID);

    if (!$rows) {
        echo '<br/>У этого автора пока нет книг.<br />';
    } else {

        ?>

        <table>
            <tr>
                <td>Books:</td>
            </tr>

            <?php foreach($rows as $index => $authorsData): ?>
                <td><?= $authorsData['title'] ?> </td>
            <?php endforeach; ?>

        </table>

        <?php

    }

} else {
    echo 'Вернитесь к выбору автора.<br />';
}

?>

<a href="index.php">На главную</a>

<?php
$bookIds = array_column($rows, 'id');
$rows = getAllBoks();
?>
    <form action="changeauthorbook.php" method="get">
        <input type="hidden" name="authorId" value="<?= $authorID ?>" />
        <select size="15" multiple name="authorBook[]">
            <?php
                foreach ($rows as $key => $book){
            ?>
            <option <?= in_array($book['id'], $bookIds) ? "selected" : "" ?> value="<?= $book['id'] ?>"><?= $book['title'] ?></option> <?php }
            ?>
        </select>
        <input type="submit" value="Сохранить">
    </form>
<?php