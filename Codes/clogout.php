<?php
	session_start();
	
	$_SESSION['customer_login'] = 'no';
	$_SESSION['customer_id'] = '';
	
	header('location:index.php');
?>