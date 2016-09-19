<!-- 4. Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя, запишите его в куки. При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!". -->
<form action="hello.php" name="loginform" method="GET">
    Введите Ваше имя: <input type="text" name="name" /><br />
    <input type="submit" value="Отправить!">
</form>