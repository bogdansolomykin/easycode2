<!-- 5. Спросите у пользователя телефон с помощью формы. Затем сделайте так, чтобы в другой форме(другая страница) (поля: имя, фамилия, телефон) при ее открытии поле телефон было автоматически заполнено. -->
<form action="form-2.php" name="form-2" method="GET">
	Ваше имя: <input type="text" name="firstname" /><br />
	Ваша фамилия: <input type="text" name="lastname" /><br />
    Ваш номер моб. телефона: <input type="text" name="cellNumber" value="<?= $_GET['cellNumber'] ?>" /><br /><br />
    <input type="submit" value="Отправить!">
</form>