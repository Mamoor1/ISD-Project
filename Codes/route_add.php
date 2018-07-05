<?php 
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	if($_POST){
		$src = $_POST['src'];
		$dst = $_POST['dst'];
		$sql = "INSERT INTO route_name(sources,destination) VALUES ('$src','$dst')";
		$query = mysqli_query($conn, $sql);
		
		if ($query){
            mysqli_close($conn);
		    header('location:route_list.php');
		}
	}
?>
<!DOCTYPE html>
<html>
	<?php include 'includes_top.php'; ?>		
	
	<body>

		<div class="body-wrap">
			<?php include'admin_header.php';?>

    		<section class="slice bg-white">
                <div class="wp-section user-account">
                    <div class="container">
                        <div class="row">
                            <?php include 'admin_navigation.php';?>
                            <div class="col-md-9">
                            	<div class="col-md-12 bg-info">
                                	<div class="col-md-6 col-md-offset-4">
	                                    <h3 class="page-header">Add New Route</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-20">	
                                    <form action="" class="form-light" role="form" method="POST">
                                        <div class="form-group">
                                            <label>Source/From</label>
                                            <input type="text" name="src" class="form-control" placeholder="Source Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Destination/To</label>
                                            <input type="text" name="dst" class="form-control" placeholder="Destination Name">
                                        </div>
                                        <button type="submit" class="btn btn-base">Add Route</button>
                                </form>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
    <?php include 'includes_bottom.php'?>
</html>
                 
                    
                 