<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
$date = date('Y-m-d H:i:s');
setcookie('lastLogin', $date);
?>
Форма
<br />
<form action="sasha2.php" name="formPhone" title="formPhone">
    Введите номер вашего телефона: <input type="text" name="phone" title="phone" />
    <input type="submit" value="Далее" title="Далее">
</form>
<br>