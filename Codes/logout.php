<?php
	session_start();
	
	$_SESSION['logged_in'] = 'no';
	$_SESSION['a_id'] = '';
	
	header('location:sign-in.php');
?>