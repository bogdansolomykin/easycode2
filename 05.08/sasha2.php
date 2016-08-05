<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
$time = time() + 60 * 60 * 24;
$date = date('Y-m-d H:i:s');
setcookie('lastLogin', $date);
if (isset($_GET['phone'])) {
    setcookie('userPhone', $_GET['phone'], $time);
    $value = $_GET['phone'];
} else {
    $value = isset($_COOKIE['userPhone']) ? $_COOKIE['userPhone'] : '';
}
?>

<form action="" name="form2" title="form2">
    Имя: <input type="text" name="name" value=" " title="name" /> <br />
    <br />
    Фамилия: <input type="text" name="lastName" value="" title="lastName " /> <br />
    <br />
    Тел.№: <input type="text" name="phoneNum" value="<?= $value ?> " title="phoneNum" /> <br />
</form>
