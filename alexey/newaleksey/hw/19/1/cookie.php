<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
function saveData($header, $text, $img)
{
    $i = 0;
    while (true) {
        $name = 'todo-' . $i;
        $i++;
        if (isset($_COOKIE[$name])) {
            continue;
        }

        $data = array(
            'header' => $header,
            'text'   => $text,
            'img' => $img,
            'date_creation' => date('Y-m-d H:i:s')
        );
        $encodedData = json_encode($data);
        setcookie($name, $encodedData);
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
            $seconds  = $secondsLeft % 60;
            $data[$name]['timeLeft'] = 'Часов:' . $hours . ', Минут:' . $minutes . ', Секунд:' . $seconds;
            $data[$name]['imgCookie'] = $name . '-img';
        } else {
            return $data;
        }
    }
}
function deleteShowImg($deleteImg)
{
    if (isset($deleteImg) && !isset($_COOKIE[$deleteImg])){
        setcookie($deleteImg, $deleteImg, time() + 86400);
    }
    else{
        setcookie($deleteImg);
    }
}