<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'query.php';

$connectionObject = getDbConnection();

if(isset($_GET['id'])) {

    $authorID = $_GET['id'];
    echo 'Author: ' . $author['name'];

    $rows = getAuthorsBooks($authorID);

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