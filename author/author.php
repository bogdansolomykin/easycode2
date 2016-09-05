<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db.php';

$connectionObject = getDbConnection();

if(isset($_GET['id'])) {

    $authorName = $_GET['id'];
    echo 'Author: ' . $authorName;

    $resource = mysqli_query($connectionObject,
        "SELECT
        `a`.`id`, `a`.`name`, `a`.`age`, `b`.`title`
        FROM `author` AS `a`
        LEFT JOIN `author_book` AS `ab` ON `a`.`id` = `ab`.`author_id`
        LEFT JOIN `book` AS `b` ON `b`.`id` = `ab`.`book_id`
        WHERE `a`.`name` = '{$authorName}';"
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

    <table>
        <tr>
            <td>Books:</td>
        </tr>

        <?php foreach($rows as $index => $author): ?>
            <tr>
                <td><?= $author['title']; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <a href="index.php">На главную</a>

    <?php
}
?>