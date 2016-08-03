<?php
$login = $_GET['login'];
$date = date('Y-m-d H:i:s');
setcookie('lastVisitTime', $date);
$counter = 1;
if (!isset($_COOKIE['counter'])) {
    setcookie('counter', $counter, time()+60*60*24);
} else {
    $counter = $_COOKIE['counter'] + 1; // 4
    setcookie('counter', $counter, time()+60*60*24);
}
if (isset($_COOKIE['login'])): ?>
    Привет, <?= $_COOKIE['login'] ?>!
    <br />
    Дата последнего логина: <?= $_COOKIE['lastLoginTime'] ?>
    <br />

<?php else: ?>
    <form action="cookie_handler.php">
        Login: <input type="text" name="login" /><br />
        Cookie's lifetime: <input type="text" name="cookiesLifeTime" />
        <input type="submit" value="Send" />
    </form>
<?php endif; ?>

Дата последнего посещения: <?= $_COOKIE['lastVisitTime'] ?> <br />

Вы заходили на эту страницу <?= $_COOKIE['counter'] ?> раз <br />