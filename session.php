<?php 

session_start();

$_SESSION['username'] = "John";
$_SESSION['age'] = 30;

if (isset($_SESSION['username']))
{
	echo "My name is".$_SESSION['username']."and my age is".$_SESSION['age'];
}else{
	echo "No username is set";
}
session_destroy();

?>


