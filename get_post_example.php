Наша супер-post форма:

<form action="" name="test-form" method="POST">
    Имя: <input type="text" name="name" /> <br />
    Фамилия: <input type="text" name="lastname" /> <br />
    <input type="submit" value="Кнопка!">
</form>
<pre>
<?php
echo 'Привет,' . $_POST['name'] . '!';
?>
</pre>
Наша супер-get форма:

<form action="" name="test-form" method="GET">
    Имя: <input type="text" name="name" /> <br />
    Фамилия: <input type="text" name="lastname" /> <br />
    <input type="submit" value="Кнопка!">
</form>
<pre>
<?php
echo 'Привет,' . $_GET['name'] . '!';
?>
</pre>
