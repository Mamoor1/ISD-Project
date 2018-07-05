<?php
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	if($_POST){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$car_id = $_POST['sc'];
		$route_id = $_POST['sr'];
		$sql1=	"UPDATE package SET car_id='$car_id', route_id='$route_id',name='$name', price='$price' WHERE package_id='$id'";
		mysqli_query($conn,$sql1);
		mysqli_close($conn);
		header('location:package_list.php');
	}		
?>