<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
require 'cookie.php';
?>
<form action="savedata.php">
    Заголовок: <input type="text" name="header"> <br />
    Картинка: <input type="text" name="img"> <br />
    Текст: <textarea name="text"></textarea><br />
    <input type="submit" value="Создать заметку">
</form>
<?php
foreach (getData() as $key => $data):
?>
    <div class="post">
        <h1><?= $data['header'] ?></h1>
        <span><?= "Дата создания: " . $data['date_creation'] ?></span>
        <br />
        <span><?= $data['timeLeft'] ?></span>
        <br />
        <?php
        if (isset($_COOKIE[$data['imgCookie']])){
            echo 'net photo'; ?>
            <form action="deleteimg.php">
                <input type="hidden" name="deleteImg" value="<?= $data['imgCookie']?>" />
                <input type="submit" value="Вернуть картинку">
            </form>
        <?php }
        else{ ?>
            <img width="300px" height="300px" src="<?= $data['img'] ?>" alt="">
            <form action="deleteimg.php">
                <input type="hidden" name="deleteImg" value="<?= $data['imgCookie']?>" />
                <input type="submit" value="Удалить картинку">
            </form>
        <?php }
        ?>
        <p><?= $data['text'] ?></p>
    </div>
<?php endforeach; ?>
