<?php
	include 'connection.php';
	$id = $_GET['id'];
	$sql=" DELETE FROM rent WHERE rent_id= '$id'";
		$query = mysqli_query($conn, $sql);
		if (mysqli_num_rows($query)>0){ 
			header('location:rent_list.php');
		}
	mysqli_close($conn);
	//header('location:admin_desc.php');
?>