<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_COOKIE['doNotShow'])) {
?>
    <img src="melon.jpg" width="600">
    <form action="setcookie.php" name="image" method="GET">
        <input type="submit" name="doNotShow" value="Do not show me this image again!">
    </form>
<?php
}
?>