<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'query.php';

$connectionObject = getDbConnection();

if(isset($_GET['id'])) {
    $authorID = $_GET['id'];
    $authorName = $_GET['name'];
    echo 'Author: ' . $authorName;

    $rows = getAuthorsBooks($authorID);
    // echo '<pre>';
    // print_r($rows);
    // echo '</pre>';

    if (!$rows) {
        echo '<br/>У этого автора пока нет книг.<br />';
    } else {

?>

    <table>
        <tr>
            <td>Books:</td>
        </tr> 

        <?php foreach($rows as $index => $authorsData): ?>
        <tr>
            <td><?= $authorsData['title']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

<?php

    }

} else {
    echo 'Вернитесь к выбору автора.<br />';
}

?>

<a href="index.php">На главную</a>