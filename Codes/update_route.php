<?php
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	if($_POST){
		$id = $_POST['id'];
		$src = $_POST['src'];
		$dst = $_POST['dst'];
		$sql1=	"UPDATE route_name SET sources='$src', destination='$dst' WHERE route_id='$id'";
		
		include 'includes_bottom.php' ;

		mysqli_query($conn,$sql1);
		mysqli_close($conn);
		header('location:route_list.php');
	}		
?>