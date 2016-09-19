<?php
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
            'text'   => $text
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
        } else {
            return $data;
        }
    }
}