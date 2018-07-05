<?php
	include 'connection.php';
	$id = $_GET['id'];
	$sql=" DELETE FROM car WHERE car_id	= '$id'";
	$query = mysqli_query($conn, $sql);
	if ($query){
		header('location:car_list.php');
	}
	mysqli_close($conn);
	//header('location:admin_desc.php');
?>