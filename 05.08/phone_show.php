<?php
if(isset($_GET['phone']) && $_GET['phone'] != ''){
    $phone = $_GET['phone'];
    setcookie('phone', $phone);
} else {
    $phone = $_COOKIE['phone'];
}
?>
<form action="phone_show.php">
    Name: <input type="text" name="name" />
    </br>
    Surname: <input type="text" name="surname" />
    </br>
    Phone: <input type="text" name="phone" value="<?php echo $phone ?>" />
    </br>
    <input type="submit" value="Send" />
</form>