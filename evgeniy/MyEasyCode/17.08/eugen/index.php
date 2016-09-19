<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'cookie.php';
?>
    <form action="save.php">
        Заголовок: <input type="text" name="header"> <br />
        Текст: <textarea name="text"></textarea><br />
        <input type="submit">
    </form>
<?php
foreach (getData() as $key => $data):
    ?>
    <div class="post">
        <h1><?= $data['header'] ?></h1>
        <?php
        if (showImage($key)) {
        ?>
            <img width="300px" height="300px" src="https://habrastorage.org/files/bbb/6d0/ce5/bbb6d0ce5b2e409aa9f8fe986d87eeec.png" alt="">
            <form action="hideimage.php">
                <input type="hidden" name="noteName" value="<?= $key ?>" />
                <input type="submit" value="Do not show me this image again">
            </form>
        <?php
        } else {
        ?>
            <form action="showimage.php">
                <input type="hidden" name="noteNameShowAgain" value="<?= $key ?>" />
                <input type="submit" value="Show hidden image">
            </form>
        <?php
        }
        ?>
        <p><?= $data['text'] ?></p>
        (<?= isset($data['date_creation']) ? $data['date_creation'] : 'Дата отсутствует' ?>)
        Осталось до удаления: <?= $data['time_left'] ?>
    </div>
<?php endforeach; ?>