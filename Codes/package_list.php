<?php 
	include 'connection.php';
?>
<?php 

	session_start();
	$a = $_SESSION['user_id'] ;
?>
<!DOCTYPE html>
<html>
	<?php include 'includes_top.php'; ?>		
	
	<body>

		<div class="body-wrap">
			<?php include 'admin_header.php' ?>

    		<section class="slice bg-white">
                <div class="wp-section user-account">
                    <div class="container">
                        <div class="row">
                            <?php include 'admin_navigation.php'; ?>
                            <div class="col-md-9">
                            	<div class="col-md-12 bg-info">
                                	<div class="col-md-6 col-md-offset-4">
	                                    <h3 class="page-header">List of the Packages</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-20">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Package Name</th>
                                                <th>Price</th>
												<th>CAR</th>
												<th>Route</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												$sql=" Select * from package ORDER BY package_id DESC";
												$query = mysqli_query($conn, $sql);
												if (mysqli_num_rows($query)>0){
													$i=0;
												 	while ($row = mysqli_fetch_array($query)){
														$i++;
											?>
                                            <tr>
												<td><?php echo $i?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['price']?></td>
												<td>
												<?php
													$car_id=$row['car_id'];
													$sql1="Select * from car Where car_id='$car_id'";
													$query1 = mysqli_query($conn, $sql1);
													
													if (mysqli_num_rows($query1)>0){ 
														while ($row1 = mysqli_fetch_array($query1)){
															echo $row1['car_name'].'---'.$row1['model'];
														}
													}
														 
												?>
												
												</td>
												<td>
												<?php
													$route_id=$row['route_id'];
													$sql2="Select * from route_name Where route_id='$route_id'";
													$query2 = mysqli_query($conn, $sql2);
													
													if (mysqli_num_rows($query2)>0){
														while ($row2 = mysqli_fetch_array($query2)){
															echo $row2['sources'].'---'.$row2['destination'];
													 	}
													}	 
												?>
												</td>
                                                <td>
													<center><a href="package_edit.php?id=<?php echo $row['package_id']?>" class="btn btn-sm btn-primary">Edit</a>
													
													
														<a href="package_delete.php?id=<?php echo $row['package_id']?>" class="btn btn-sm btn-danger">
															Delete
														</a>
													</center>
												</td>
                                            </tr>
											<?php
													}
												}
												
												mysqli_close($conn);
											?>
                                        </tbody>
                                    </table>
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
                 
                    
                 