<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php

require_once 'query.php';

if(isset($_GET['id'])){
    $authorID = $_GET['id'];
    $rows = getAuthorsWithBooksQuantity($authorID);
    foreach ($rows as $key => $values){
        if($values['id'] == $authorID){
            break;
        }
    }
    require_once 'forms/editauthorform.php';
}
else{
    echo 'Вы не выбрали автора';
}