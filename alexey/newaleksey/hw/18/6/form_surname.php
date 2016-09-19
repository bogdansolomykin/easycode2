<?php
$name = $_GET['name'];
setcookie('name', $name);
?>
<form action="form_age.php">
	Surname: <input type="text" name="surname" placeholder="Укажите свою фамилию"/>
	<input type="submit" value="send" />
</form>
