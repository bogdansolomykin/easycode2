<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'query.php';

// $connectionObject = getDbConnection();

if(isset($_GET['id']) && $_GET['id'] != '' && $_GET['name'] != '') {
    $authorID = $_GET['id'];
    $authorName = $_GET['name'];
    echo 'Author: ' . $authorName . '<br />';

    $thisAuthorBooks = getAuthorBooks($authorID); // получаем массив с книгами данного автора
    // echo '<pre>';
    // print_r($thisAuthorBooks);
    // echo '</pre>';

    $booksIdArr = []; // объявляем массив для ID книг автора
    $booksID = 0;

    if ($thisAuthorBooks) {
        foreach ($thisAuthorBooks as $authorsData) {
            $booksIdArr[] = $authorsData['book_id']; // наполняем массив ID книг автора
        }
        // echo '<pre>';
        // print_r($booksIdArr);
        // echo '</pre>';
        $booksID = implode(", ", $booksIdArr); // получаем строку с перечислением ID книг автора
        // echo $booksID;

        ?>
        <table>
            <tr>
                <td>Books:</td>
            </tr> 

            <?php foreach($thisAuthorBooks as $index => $authorsData): ?>
            <tr>
                <td><?= $authorsData['title']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table><br />

        <form action="cut.php" name="cutBooks" method="GET">
            Choose the books to cut from this author:<br />
            <select multiple name="choosenToCutBooks[]" size="12">
                <?php foreach($thisAuthorBooks as $thisAuthorBook): ?>
                    <option value="<?= $thisAuthorBook['book_id']; ?>">
                        <?= $thisAuthorBook['title']; ?>
                    </option>
                <?php endforeach; ?>
            </select><br />
            <input type="hidden" name="authorID" value="<?= $authorID ?>">
            <input type="hidden" name="authorName" value="<?= $authorName ?>">
            <input type="submit" name="cutButton" value="Cut!">
        </form>
        <?php
    } else {
        echo '<br/>У этого автора пока нет книг.<br /><br />';
    }

    $otherAuthorsBooks = getOtherAuthorsBooks($authorID, $booksID); // получаем массив с книгами других авторов
    // echo '<pre>';
    // print_r($otherAuthorsBooks);
    // echo '</pre>';

    if ($otherAuthorsBooks) {
        ?>

        <form action="glue.php" name="glueBooks" method="GET">
            Choose the books to glue with this author:<br />
            <select multiple name="choosenBooks[]" size="12">
                <?php foreach($otherAuthorsBooks as $otherAuthorBook): ?>
                    <option value="<?= $otherAuthorBook['id']; ?>">
                        <?= $otherAuthorBook['title']; ?>
                    </option>
                <?php endforeach; ?>
            </select><br />
            <input type="hidden" name="authorID" value="<?= $authorID ?>">
            <input type="hidden" name="authorName" value="<?= $authorName ?>">
            <input type="submit" name="glueButton" value="Glue!">
        </form>

    <?php
    }

} else {
    echo 'Вернитесь к выбору автора.<br />';
}
?>
<a href="index.php">На главную</a>

