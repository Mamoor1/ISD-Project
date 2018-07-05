<?php 
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	$car_id=$_GET['id'];
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
										$sql=" Select * from car WHERE car_id='$car_id'";
										$query = mysqli_query($conn, $sql);
										if (mysqli_num_rows($query) > 0 ){ 
											$i=0;
									        while ($row = mysqli_fetch_array($query)){
											$i++;
									?>
                                    <form action="update_car.php" method="POST" class="form-light" role="form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="<?php echo $row['car_name']?>" class="form-control" placeholder="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type="text" name="model" value="<?php echo $row['model']?>" class="form-control" placeholder="car model">
                                        </div>
                                        
                                      
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="photo" class="form-control" placeholder="name">
                                        </div>
                                        <button type="submit" class="btn btn-base">Update cAR</button>
										<input type="hidden" name="car_id" class="form-control" value="<?php echo $row['car_id']?>">
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
                 
                    
                 