1
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
setcookie('name2', 4);
echo '<pre>' . print_r($_COOKIE, 1) . '</pre>';
//$n = $_COOKIE['name2'] + 2;
setcookie('name2', 6); // выполнится толькой нижний сеткуки?
?>
2