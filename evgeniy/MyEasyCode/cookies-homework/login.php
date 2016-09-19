<?php
$date = date("d-m-Y H:i:s");
echo 'Ваш логин: ' . $_COOKIE['login'];
echo '<br />';
echo 'Последний визит: ' . $_COOKIE['visitTime'];
echo '<br />';
echo 'Сейчас на часах: ' . $date;
echo '<br />';
