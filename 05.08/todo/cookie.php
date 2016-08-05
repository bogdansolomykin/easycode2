<?php
function saveData($header, $text, $time = 86400)
{
    $i = 0;
    while (true) {
        $name = 'todo-' . $i;
        $i++;
        if (isset($_COOKIE[$name])) {
            continue;
        }

        setcookie($name, '', $time);
    }

}