<?php
require 'cookie.php';
?>
<?php
if (isset($_GET['header']) && $_GET['header'] != '') {
    saveData($_GET['header'], $_GET['text']);
}
?>
<form action="">
    Заголовок: <input type="text" name="header"> <br />
    Текст: <textarea name="text"></textarea><br />
    <input type="submit">
</form>
<?php
foreach (getData() as $key => $data):
?>
    <div class="post">
        <h1><?= $data['header'] ?></h1>
        <img width="300px" height="300px" src="https://habrastorage.org/files/bbb/6d0/ce5/bbb6d0ce5b2e409aa9f8fe986d87eeec.png" alt="">
        <p><?= $data['text'] ?></p>
    </div>
<?php endforeach; ?>