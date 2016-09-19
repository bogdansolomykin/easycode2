<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function showImage() {
    $n = 0;
    while (true) {
        $imgID = 'img-' . $n;
        $n++;
        if (isset($_GET[$imgID])) {
            setcookie($imgID, $_GET[$imgID]);
        }
        break;
    }
    return $imgID;
}

function saveData($header, $text, $time = 86400)
{
    $i = 0;
    $time = time() + $time;
    while (true) {
        $name = 'todo-' . $i;
        $i++;
        if (isset($_COOKIE[$name])) {
            continue;
        }

        $data = array(
            'header' => $header,
            'text'   => $text,
            'date_creation' => date('Y-m-d H:i:s')
        );
        $encodedData = json_encode($data);
        setcookie($name, $encodedData, $time);
        break;
    }
}

function getData()
{
    $data = array();
    $i = 0;
    while (true) {
        $name = 'todo-' . $i;
        $i++;
        if (isset($_COOKIE[$name])) {
            $data[$name] = json_decode($_COOKIE[$name], true);
            $creationTime = strtotime($data[$name]['date_creation']);
            $deleteTime = $creationTime + 86400;
            $secondsLeft = $deleteTime - strtotime(date('Y-m-d H:i:s'));
            $hours = floor($secondsLeft / 3600);
            $minutes = floor(($secondsLeft % 3600) / 60);
            $seconds = $secondsLeft % 60;
            $data[$name]['time_left'] = 'Часов:' . $hours . ', минут: ' . $minutes . ', секунд: ' . $seconds;
        } else {
            return $data;
        }
    }
}