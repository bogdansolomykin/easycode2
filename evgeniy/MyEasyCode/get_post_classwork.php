<?php
header("Content-type: text/html; Charset=windows-1251");
?>
<!-- 1. —оздать форму с такими пол€ми:
»м€
‘амили€
язык программировани€, который учу
язык, который хотел бы выучить -->

<!--
<form action="" name="test-form" method="POST">
    »м€: <input type="text" name="name" /> <br />
    ‘амили€: <input type="text" name="lastname" /> <br />
    язык программировани€, который учу: <input type="text" name="lang1" /> <br />
    язык, который хотел бы выучить: <input type="text" name="lang2" /> <br />
    <input type="submit" value="∆ми!">
</form>
-->

<!-- 2.  ѕрин€ть данные и вывести следующий текст на страницу:
ѕривет!
ћен€ зовут <»м€> <‘амили€>. я изучаю <язык программировани€>. ’отел бы изучать <язык программировани€>. -->

<?php
// echo "ѕривет!<br />
// ћен€ зовут " . $_POST['name'] . " " . $_POST['lastname'] . ". " . "я изучаю " . $_POST['lang1'] . ". ’отел бы изучать " . $_POST['lang2'] . ".";
?>

<!-- 
<form action="" name="test-form" method="GET">
    —лово: <input type="text" name="word" /> <br />
     ол-во повторений: <input type="text" name="repeat" /> <br />
    <input type="submit" value="Start!">
</form>
 -->

<?php
/*
$n = $_GET['repeat'];
$i = 0;
while ($i < $n) {
	echo $_GET['word'] . '<br />';
	$i++;
}
*/
?>

<form action="" name="test-form" method="POST">
    —лово: <input type="text" name="word" /> <br />
     ол-во повторений: 
    <select name="repeat">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <input type="submit" value="Start!">
</form>

<?php

$n = $_POST['repeat'];
$i = 0;
while ($i < $n) {
	echo strrev($_POST['word']) . '<br />';
	$i++;
}

?>
