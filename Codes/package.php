<!DOCTYPE html>
<html>  
    <?php 
		include 'includes_top.php';
		include 'connection.php';
	?>
<body>

<!-- MAIN WRAPPER -->
<div class="body-wrap">
    
    <?php include 'header.php';?>

    <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Packages</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Packages</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="slice light-gray bb">
        <div class="wp-section">
            <div class="container">
                <div class="row">
					<?php
						$sql=" SELECT * FROM package ORDER BY package_id DESC";
						$query = mysqli_query($conn, $sql);
						if(mysqli_num_rows($query)>0){
							while($row = mysqli_fetch_array($query)){
					?>
                    <div class="col-lg-3 col-md-6">
                        <div class="wp-block hero  no-margin" style="box-shadow:0px 1px 5px 7px rgba(152, 146, 146, 0.28);background:#fff !important;color:black !important">
                            <h2 style="font-size:24px;"><?php echo $row['name']?></h2>
                            <p class="text-center" style="font-size:20px;">
								<b>Price:</b> <?php echo $row['price']?><br>
								<?php
									$r_id=$row['route_id'];
									$sql2="SELECT * from route_name Where route_id='$r_id'";
									$query2 = mysqli_query($conn, $sql2);
									
									if (mysqli_num_rows($query2)>0){ 
										while ($row2 = mysqli_fetch_array($query2)){ 
								?>
									<b>Route:</b> <?php echo $row2['sources']?>-<?php echo $row2['destination']?><br>
								<?php 
										}
									}
								?>
								<?php
									$car_id=$row['car_id'];
									$sql1="SELECT * from car Where car_id='$car_id'";
									$query1 = mysqli_query($conn, $sql1);
									
									if (mysqli_num_rows($query1)>0){ 
										while ($row1 = mysqli_fetch_array($query1)){	 
								?>
									<b>Car: </b> <?php echo $row1['car_name'].'-'.$row1['model'];?>
								<?php 
										}
									}
								?>
							</p>
							<?php
								$msg="";
								if($_SESSION['customer_login'] == 'yes'){
									if($_POST){
									$p_id = $_POST['p_id'];
									$c_id = $_POST['c_id'];
									$sql = "INSERT INTO rent(package_id,customer_id) VALUES ('$p_id','$c_id')";
									$query = mysqli_query($conn, $sql);									
									if ($query){
										$msg="<center><p style='background:#333;color:white;font-size:16px'>Successfully Rented</p></center>";
										echo $msg ;
									} 
								}
							?>
							
							<form action="" id="frmLogin" class="sky-form" method="post"> 
								<input type="hidden" value="<?php echo $_SESSION['customer_id']?>" name="c_id">
								<input type="hidden" value="<?php echo $row['package_id']?>" name="p_id">
								<input type="submit" class="btn btn-sm btn-primary pull-right" style="margin-bottom:5%;color:white;font-size:16px" value="Rent">
							</form>
							<?php 
								}
							?>
                        </div>
                    </div>
                    <?php 
							}
						}
						mysqli_close($conn);
					?> 
                </div>

            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</div>

<?php include 'includes_bottom.php';?>
</body>
</html>