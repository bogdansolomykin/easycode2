<?php
if(isset($_COOKIE['age'])){
	$age = $_GET['age'];
	setcookie('age', $age);
	$ageValue = $_COOKIE['age'];
}
else{
	$ageValue = $_GET['age'];
	$age = $_GET['age'];
	setcookie('age', $age);
}
echo "Name: " . $_COOKIE['name'];
echo "<br />"; 
echo "Surname: " . $_COOKIE['surname'];
echo "<br />";
echo "Age: " . $ageValue;
?>