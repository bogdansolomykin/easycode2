<!--4. Напишите оболочку над cookie. Оболочка должна представлять собой набор функций: сохранение куки, удаление куки, редактирование куки.-->
<?php
require 'cookie.php';
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<h1>Форма создания куки</h1>
<form action="">
   Ключ куки: <input  type="text" name="key">
   Значение куки: <input  type="text" name="value">
   Время жизни куки: <input  type="text" name="time">
    <input type="submit" value="send">
</form>
<h1>Форма редактированя куки</h1>
<form action="">
    Ключ куки: <input type="text" name="cookieOld">
    Новое значение куки: <input type="text" name="cookieNew">
    <input type="submit" value="send">
</form>
<h1>Флрма удаления куки</h1>
<form action="">
    Удалить куку: <input type="text" name="cookieDelete">
    <input type="submit" value="send">
</form>
<h1>Форма выведения куки на экран</h1>
<form action="">
    Вывести куку: <input type="text" name="cookieGet">
    <input type="submit" value="send">
</form>
<?php
//$key = inspection($_GET['key']); //Хотел проверку вынести в функцию, но Notice: Undefined index: key in /var/www/html/hw/19/4/index.php on line 34
$key = isset($_GET['key']) ? $_GET['key'] : '';
$value = isset($_GET['value']) ? $_GET['value'] : '';
$time = isset($_GET['time']) ? $_GET['time'] : '';
$cookieDelete = isset($_GET['cookieDelete']) ? $_GET['cookieDelete'] : '';
$cookieOld = isset($_GET['cookieOld']) ? $_GET['cookieOld'] : '';
$cookieNew = isset($_GET['cookieNew']) ? $_GET['cookieNew'] : '';
$cookieGet = isset($_GET['cookieGet']) ? $_GET['cookieGet'] : '';
saveCookie($key, $value, $time);
cookieDelete($cookieDelete);
cookieEdit($cookieOld, $cookieNew);
echo "<br />";
echo cookieGet($cookieGet);