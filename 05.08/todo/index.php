<?php
require 'cookie.php';
?>
<form action="">
    Заголовок: <input type="text" name="header"> <br />
    Текст: <textarea name="text"></textarea><br />
    <input type="submit">
</form>
<?php
saveData('', '');
?>
<div class="post">
    <h1>Заголовок</h1>
    <img src="" alt="">
    <p>Текст</p>
</div>