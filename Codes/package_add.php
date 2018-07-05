<?php 
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	if($_POST){
		 $name = $_POST['name'];
		 $price = $_POST['price'];
		 $car_id = $_POST['sc'];
		 $route_id = $_POST['sr'];
		 $sql = "INSERT INTO package(car_id,route_id,name,price) VALUES ('$car_id','$route_id','$name','$price')";
		 $query = mysqli_query($conn, $sql);
		if ($query){
			header('location:package_list.php');
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
	                                    <h3 class="page-header">Add Package</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-20">	
                                    <form class="form-light" role="form" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Package name">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control" placeholder="Package price">
                                        </div>
                                        <div class="form-group">
                                            <label>Select Route</label>
											<select class="form-control" name="sr">
												<option value="">Select One</option>
												<?php
													$sql2="Select * from route_name";
													$query2 = mysqli_query($conn, $sql2);
													
													if (mysqli_num_rows($query2)>0){
														while ($row = mysqli_fetch_array($query2)){		 
												?>
													<option value="<?php echo $row['route_id']?>"><?php echo $row['sources']?>-<?php echo $row['destination']?></option>
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
														while ($row = mysqli_fetch_array($query1)){
														 
												?>
													<option value="<?php echo $row['car_id']?>"><?php echo $row['car_name']?></option>
												<?php
														} 
													}
												?>
											</select>
                                        </div>
                                        <button type="submit" class="btn btn-base">Add Package</button>
                                </form>
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
                 
 <?php 
 	mysqli_close($conn);
 ?>                   
                 