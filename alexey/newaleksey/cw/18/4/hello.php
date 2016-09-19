<?php

if(isset($_COOKIE['name'])){
	$name = $_GET['name'];
	setcookie('name', $name);
	echo "Hello " . $_COOKIE['name'];
	}
else{
	$name = $_GET['name'];
	setcookie('name', $name);
	echo "Hello " . $_GET['name'];
}