<!--3. Покажите пользователю картинку и рядом кнопку 'Не показывать больше!'. Если он нажмет на эту кнопку - не показывайте ему картинку в течении месяца.-->
<?php
$value = 1;
if(!isset($_GET['deleteGet']) && !isset($_COOKIE['deleteCook'])){ ?>
<img src="http://www.bugaga.ru/uploads/posts/2016-04/1460696799_kartinki-8.jpg" alt="">
    <form action="">
        <input type="submit" value="delete img" name="deleteGet">
    </form>
<?php }
if(isset($_GET['deleteGet'])){
    $time = time() + 60*60*24*30;
    setcookie('deleteCook', $_GET['deleteGet'], $time);
}


echo "GET: " . $_GET['deleteGet'];
echo "<br />";
echo "COOKIE: " . $_COOKIE['deleteCook'];