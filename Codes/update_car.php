<?php
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	if($_POST){
		$id 	= $_POST['car_id'];
		$name 	= $_POST['name'];
		$model 	= $_POST['model'];
		$sql1=	"UPDATE car SET car_name='$name', model='$model' WHERE car_id='$id' and owner_id='$a'";
		mysqli_query($conn,$sql1);
		mysqli_close($conn);
		header('location:car_list.php');
	}		
?>