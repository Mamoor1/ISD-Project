<?php 
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	$route_id=$_GET['id'];
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
	                                    <h3 class="page-header">Edit Car</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-20">	
									<?php
										$sql=" Select * from route_name WHERE route_id='$route_id'";
										$query = mysqli_query($conn, $sql);
										if (mysqli_num_rows($query)>0){
                                            $i=0;
										    while ($row = mysqli_fetch_array($query)){
											    $i++;
									?>
                                    <form action="update_route.php" method="POST" class="form-light" role="form">
                                        <div class="form-group">
                                            <label>Source/From</label>
                                            <input type="text" name="src" value="<?php echo $row['sources']?>" class="form-control" placeholder="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Destination/To</label>
                                            <input type="text" name="dst" value="<?php echo $row['destination']?>" class="form-control" placeholder="car model">
                                        </div>
                                        <button type="submit" class="btn btn-base">Update cAR</button>
										<input type="hidden" name="id" class="form-control" value="<?php echo $row['route_id']?>">
									</form>
								<?php 
									   }
                                    }
									mysqli_close($conn);
								?>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
    <?php include 'includes_bottom.php' ?>
</html>
                 
                    
                 