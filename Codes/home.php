<?php
	include 'connection.php';
?>
<section id="slider-wrapper" class="layer-slider-wrapper layer-slider-static" style="">
    <div id="layerslider" style="width: 100%; height: 700px;">   
        <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
            <!-- slide background -->          
            <img src="bg.jpg" class="ls-bg" style="width: 100%;"  alt="Slide background"/>
            
      
        </div>
		<div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
            <!-- slide background -->          
            <img src="bg1.jpg" class="ls-bg" style="width: 100%;"  alt="Slide background"/>
            
      
        </div>
		<div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
            <!-- slide background -->          
            <img src="bg2.jpg" class="ls-bg" style="width: 100%;"  alt="Slide background"/>
            
      
        </div>
    </div>
</section>

<section class="slice light-gray bb">
    <div class="wp-section">
        <div class="container">
            <div class="section-title-wr mb-40">
               <center> <h3 class="section-title left">
                    <span>Packages</span>
                    
                </h3></center>
            </div>
            <div class="row">
				<?php
					$sql=" SELECT * FROM package ORDER BY package_id DESC";
					$query = mysqli_query($conn, $sql);
					if ($query){
				    	$i=0;
					   	while ($row = mysqli_fetch_array($query)){
							$i++;
				?>
                <div class="col-md-4 col-sm-4" style="border:1px dashed black;box-shadow:0px 1px 5px 7px rgba(105, 37, 37, 0.56)">
                    <div class="icon-block icon-block-3">
                            <center><h4 class=""><em><?php echo $row['name']?></em></h4></center>
							<hr>
                            <h4 class=""><em>Price: <?php echo $row['price']?></em></h4>
							<?php
								$r_id=$row['route_id'];
								$sql2="SELECT * from route_name Where route_id='$r_id'";
								$query2 = mysqli_query($conn, $sql2);
								
								if (mysqli_num_rows($query2) > 0){
									while ($row2 = mysqli_fetch_array($query2)){
									 
							?>
								<h4 class="">
									<em>Route: <?php echo $row2['sources']?>-<?php echo $row2['destination']?></em>
								</h4>
							<?php 
									}
								}

							?>
							<?php
								$car_id=$row['car_id'];
								$sql1="SELECT * from car Where car_id='$car_id'";
								$query1 = mysqli_query($conn, $sql1);
								
								if (mysqli_num_rows($query1) > 0){
									while ($row1 = mysqli_fetch_array($query1)){	 
							?>
														
								<h4 class=""><em>Car: <?php echo $row1['car_name'].'-'.$row1['model'];?></em></h4>						
							<?php 
									}
								}
							?>
							<?php
								$msg="";
								if($_SESSION['customer_login'] == 'yes'){
									if($_POST){
									$p_id = $_POST['p_id'];
									$c_id = $_POST['c_id'];
									$sql = "INSERT INTO rent(package_id,customer_id) VALUES ('$p_id','$c_id')";
									$query = mysqli_query($conn, $sql);
									$msg="<center><p style='background:#333;color:white;font-size:16px'>Successfully Rented</p></center>";
								}
							?>
							<?php echo $msg ;?>
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
				?>
            </div>
        </div>    
    </div>
</section>

<section class="slice bg-white bb animate-hover-slide-3">
    <div class="wp-section">
        <div class="container">
            <div class="section-title-wr">
               <h3 class="section-title left">
                <center><span>Our Cars</span></center>
                
            </h3>
            </div>
            <div class="row">
				<?php
					$sql=" Select * from car ORDER BY car_id DESC";
					$query = mysqli_query($conn, $sql);
					if (mysqli_num_rows($query) > 0){
						while ($row1 = mysqli_fetch_array($query)){
						
				?>
                <div class="col-md-3">
                    <div class="wp-block inverse">
                        <div class="figure">
                            <img alt="" src="images/bmw.jpg" class="img-responsive">
                        </div>
                        <h2>Car Name : <?php echo $row1['car_name']?></h2>
                        <h2>Car Model :<?php echo $row1['model']?></h2>
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



</section>