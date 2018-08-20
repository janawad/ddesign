<?php 
	session_start();
	require_once "clasess/generic.class.php";
	$redirectPage = 'login.php';
	session_destroy();
	header("Location: login.php");
?>