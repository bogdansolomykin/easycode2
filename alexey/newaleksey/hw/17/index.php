<form  action="print_cookie.php" name="test-form" method="GET">
    <input type="text" name="name" />
    <input type="text" name="lastName" />
    <input type="submit" value="Send">
</form>
<?php
setcookie('cookie1', $_GET['name']);
setcookie('cookie2', $_GET['lastName']);
