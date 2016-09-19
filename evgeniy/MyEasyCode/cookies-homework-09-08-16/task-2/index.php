<!-- 2. Добавить возможность менять ссылку на картинку для каждой заметки -->
<div class="post">
    <h1>Заголовок 1 Заголовок 1 Заголовок 1</h1>
    <img width="600px" src="<?= isset($_COOKIE['newImageURL']) ? $_COOKIE['newImageURL'] : 'https://habrastorage.org/files/bbb/6d0/ce5/bbb6d0ce5b2e409aa9f8fe986d87eeec.png'; ?>" alt=""><br />
    <a href="changeimage.php">Change image</a>
    <p>Текст заметки 1 Текст заметки 1 Текст заметки 1</p>
</div>