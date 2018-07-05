<?php 
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	$package_id=$_GET['id'];
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
	                                    <h3 class="page-header">Edit Package</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-20">
									<?php
										$sql=" Select * from package where package_id='$package_id'";
										$query = mysqli_query($conn, $sql);
										if (mysqli_num_rows($query)>0){
											$i=0;
											while ($row = mysqli_fetch_array($query)){
											$i++;
									?>
										<form action="update_package.php" class="form-light" role="form" method="POST">
											<div class="form-group">
												<label>Name</label>
												<input type="text" name="name" value="<?php echo $row['name']?>" class="form-control" placeholder="Package name">
											</div>
											<div class="form-group">
												<label>Price</label>
												<input type="text" name="price" value="<?php echo $row['price']?>" class="form-control" placeholder="Package price">
											</div>
											<div class="form-group">
												<label>Select Route</label>
												<select class="form-control" name="sr">
													<option value="">Select One</option>
													<?php
														$sql2="Select * from route_name";
														$query2 = mysqli_query($conn, $sql2);
														
														if (mysqli_num_rows($query2)>0){
															while ($row2 = mysqli_fetch_array($query2)){
															 
													?>
														<option <?php if($row2['route_id']==$row['route_id']){ echo  'selected'; } ?> value="<?php echo $row2['route_id']?>"><?php echo $row2['sources']?>-<?php echo $row2['destination']?></option>
													<?php 
															}
														}

													?>
												</select>
											</div>
										  
											<div class="form-group">
												<label>Select Car</label>
												<select class="form-control" name="sc">
													<option value="" >Select One</option>
													<?php
														$sql1="Select car_id,car_name from car";
														$query1 = mysqli_query($conn, $sql1);
														
														if (mysqli_num_rows($query1)>0){
															while ($row1 = mysqli_fetch_array($query1)){
															 
													?>
														
														<option <?php if($row1['car_id']==$row['car_id']){ echo  'selected'; } ?> value="<?php echo $row1['car_id']?>" >
															<?php echo $row1['car_name']?>
														</option>
													<?php
															} 
														}
													?>
												</select>
											</div>
											<input type="hidden" name="id" class="form-control" value="<?php echo $row['package_id']?>">
											<button type="submit" class="btn btn-base">Add Package</button>
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
                                    
                 