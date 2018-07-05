<?php
	include 'connection.php';
	$id = $_GET['id'];
	$sql=" DELETE FROM route_name WHERE route_id	= '$id'";
	$query = mysqli_query($conn, $sql);
	if ($query){
		header('location:route_list.php');
	}
	mysqli_close($conn);
	//header('location:admin_desc.php');
?>