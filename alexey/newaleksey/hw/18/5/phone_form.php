 <!-- 5. Спросите у пользователя телефон с помощью формы. Затем сделайте так, чтобы в другой форме(другая страница) (поля: имя, фамилия, телефон) при ее открытии поле телефон было автоматически заполнено. -->
 <?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 ?>
 <form action="phone_show.php">
    Phone: <input type="text" name="phone" />
    <input type="submit" value="Send" />
</form>

