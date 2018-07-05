<?php
	include 'connection.php';
	$id = $_GET['id'];
	$sql=" DELETE FROM package WHERE package_id	= '$id'";
	$query = mysqli_query($conn, $sql);
	if ($query){
		header('location:package_list.php');
	}

	//header('location:admin_desc.php');
?>