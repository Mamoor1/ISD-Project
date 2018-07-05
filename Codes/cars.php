<!DOCTYPE html>
<html>  
    <?php 
		include 'includes_top.php';
		include 'connection.php'
	?>
<body>
<!-- MAIN WRAPPER -->
<div class="body-wrap">

    <?php include 'header.php';?>
        
    <!-- MAIN CONTENT -->
    <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Team</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Team</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

   
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
					if (mysqli_num_rows($query) >0 ){ 
						while ($row = sqlsrv_fetch_array($query)){
				?>
                <div class="col-md-3">
                    <div class="wp-block inverse">
                        <div class="figure">
                            <img alt="" src="images/bmw.jpg" class="img-responsive">
                        </div>
                        <h2>Car Name : <?php echo $row['car_name']?></h2>
                        <h2>Car Model :<?php echo $row['model']?></h2>
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
     <?php include 'includes_bottom.php';?>
</div>

</body>
</html>