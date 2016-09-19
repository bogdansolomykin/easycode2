<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
setcookie('firstname', $_GET['firstname'], time() + 60 * 60 * 24);
?>
<form action="form-3.php" name="form-2" method="GET">
    Ваша фамилия: <input type="text" name="lastname" /><br />
    <input type="submit" value="Запомнить">
</form>



