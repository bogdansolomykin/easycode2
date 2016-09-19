<form  action="" name="test-form" method="GET">
    <input type="text" name="name" />
    <input type="text" name="lastName" />
</form>
<?php
setcookie('cookie1', $_GET['name'], $time);
setcookie('cookie1', $_GET['lastName'], $time);


//Для принт

<?php
echo $_COOKIE['name'] . $_COOKIE['lastName'];