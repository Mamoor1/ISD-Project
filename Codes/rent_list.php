<?php 
	include 'connection.php';
?>
<?php 

	session_start();
	$a = $_SESSION['user_id'] ;
	function getname($hid){
		
	}
?>
<!DOCTYPE html>
<html>
	<?php include 'includes_top.php'; ?>		
	
	<body>

		<div class="body-wrap">
			<?php include 'admin_header.php'?>

    		<section class="slice bg-white">
                <div class="wp-section user-account">
                    <div class="container">
                        <div class="row">
                            <?php include 'admin_navigation.php'; ?>
                            <div class="col-md-9">
                            	<div class="col-md-12 bg-info">
                                	<div class="col-md-6 col-md-offset-4">
	                                    <h3 class="page-header">List of the Rents</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-20">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
												<th>Customer Name</th>
												<th>Phone No</th>
                                                <th>Package Name</th>
                                                <th>Price</th>
												<th>CAR</th>
												<th>Route</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												$sql=" Select * from rent ORDER BY rent_id DESC";
												$query = mysqli_query($conn, $sql);
												//var_dump($query);
												if ($query){
													$i=0;
													while ($row = mysqli_fetch_array($query)){
														$i++;
														$cus_id=$row['customer_id'];
														$z = "SELECT * FROM customer Where customer_id='$cus_id'";
														$y = mysqli_query($conn, $z);
														if ($y){
															while ($r = mysqli_fetch_array($y)){
											?>
											
                                            <tr>
												<td><?php echo $r['name'];?></td>
												<td><?php echo $r['phone'];?></td>
												<?php
														} 
												 	}

													$p_id=$row['package_id'];
													$sql1=" Select * from package Where package_id='$p_id'";
													$query1 = mysqli_query($conn, $sql1);
													if ($query1){
														$i=0;
														while ($row1 = mysqli_fetch_array($query1)){														 
												?>
                                                <td><?php echo $row1['name'];?></td>
                                                <td><?php echo $row1['price']?></td>
												<td>
												<?php
													$car_id=$row1['car_id'];
													$sql2="Select * from car Where car_id='$car_id'";
													$query2 = mysqli_query($conn, $sql2);
													
													if ($query2){
														while ($row2 = mysqli_fetch_array($query2)){
															echo $row2['car_name'].'---'.$row2['model'];
														}
													}
														 
												?>
												
												</td>
												<td>
												<?php
													$route_id=$row1['route_id'];
													$sql3="Select * from route_name Where route_id='$route_id'";
													$query3 = mysqli_query($conn, $sql3);
													
													if ($query3){
														while ($row3 = mysqli_fetch_array($query3)){
															echo $row3['sources'].'---'.$row3['destination'];
														}
													}
														 
												?>
												</td>
                                                <td>
													<center>
														<a href="rent_delete.php?id=<?php echo $row['RentID']?>" class="btn btn-sm btn-danger">
															Cencel
														</a>
													</center>
												</td>
												<?php 
														}
													}
												?>
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
                 
                    
                 