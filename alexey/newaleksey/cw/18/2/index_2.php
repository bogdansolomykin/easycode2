<?php

$lastTime = date('Y-m-d H:i:s');
setcookie('lastTime', $lastTime)
echo "Нынешняя дата" . $lastTime;
echo "</ br>";
echo "Последний вход" . $_COOKIE['lastTime'];
echo "</ br>";
<!-- <?php if (isset($_COOKIE['login'])): ?>
    Привет, <?= $_COOKIE['login'] ?>!
    <br />
    Дата последнего логина: <?= $_COOKIE['lastLoginTime'] ?>
<?php else: ?>
    <form action="cookie_handler.php">
        Login: <input type="text" name="login" />
        Time: <input type="text" name="time" />
        <input type="submit" value="Send" />
    </form>
<?php endif; ?> -->

