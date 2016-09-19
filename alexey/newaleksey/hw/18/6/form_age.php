<?php
$surname = $_GET['surname'];
setcookie('surname', $surname);
?>
<form action="data.php">
	Age: <input type="text" name="age" placeholder="Укажите свой возраст"/>
	<input type="submit" value="send" />
</form>