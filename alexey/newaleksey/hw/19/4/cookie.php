<?php
function saveCookie($key, $value, $time)
{
    if(isset($_GET['key']) && isset($_GET['value']) && isset($_GET['time']))
    {
        $time = time() + $_GET['time'];
        setcookie($key, $value, $time);
    }
}
function cookieDelete($cookieDelete){
    if(isset($_GET['cookieDelete']))
    {
        setcookie($cookieDelete, 0, time());
    }
}
function cookieEdit($cookieOld, $cookieNew){
    if(isset($_GET['cookieOld']) && isset($_GET['cookieNew']))
    {
        setcookie($cookieOld, $cookieNew);
    }
}
function cookieGet($cookieGet){
    if(isset($_GET['cookieGet']))
    {
        return "Ключ: " . $cookieGet . " Значение: " . $_COOKIE[$cookieGet];
    }
}
//function inspection($inspectValue){ //До ума не довел
//    return isset($inspectValue) ? $inspectValue : '';
//}