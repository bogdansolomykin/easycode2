<!-- 3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'. -->
<?php
$counter = 1;
if(isset($_COOKIE['counter'])){
	$counter = $_COOKIE['counter'];
	$counter++;
}
else{
	$counter = 1;
}
setcookie('counter', $counter);
echo "Счетчик" . $_COOKIE['counter'];
?>