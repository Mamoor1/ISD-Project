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
	                                    <h3 class="page-header">List of the Cars</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-20">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Car Name</th>
                                                <th>Car Model</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												$sql=" Select * from car WHERE owner_id='$a' ORDER BY car_id DESC";
												$query = mysqli_query($conn, $sql);
												if (mysqli_num_rows($query) > 0){
													$i=0;
												 	while ($row = mysqli_fetch_array($query)){
														$i++;
											?>
                                            <tr>
												<td><?php echo $i?></td>
                                                <td><?php echo $row['car_name']?></td>
                                                <td><?php echo $row['model']?></td>
                                                <td>
													<center><a href="car_edit.php?id=<?php echo $row['car_id']?>" class="btn btn-sm btn-primary">Edit</a>
													
													
														<a href="car_delete.php?id=<?php echo $row['car_id']?>" class="btn btn-sm btn-danger">
															Delete
														</a>
													</center>
												</td>
                                            </tr>
											<?php
													} 
												}
                                                else{
                                                    echo 'No data available!';
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
                 
                    
                 