<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
setcookie('lastname', $_GET['lastname'], time() + 60 * 60 * 24);
?>
<form action="results.php" name="form-3" method="GET">
    Ваш возраст: <input type="text" name="age" /><br />
    <input type="submit" value="Запомнить">
</form>
