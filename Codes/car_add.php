<?php 
	include 'connection.php';
	session_start();
	$a = $_SESSION['user_id'] ;
	if($_POST){
		$name = $_POST['name'];
	    $model = $_POST['model'];
		$id = $a;
		$sql = "INSERT INTO car(owner_id,car_name,model) VALUES ('$id','$name','$model')";
		$query = mysqli_query($conn, $sql);
		
		if ($query){ 
			mysqli_close($conn);
            header('location:car_list.php');
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
	                                    <h3 class="page-header">Add New Car</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-20">	
                                    <form class="form-light" role="form" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type="text" name="model" class="form-control" placeholder="car model">
                                        </div>
                                        
                                      
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="photo" class="form-control" placeholder="name">
                                        </div>
                                        <button type="submit" class="btn btn-base">Add cAR</button>
										<input type="hidden" name="owner_id" class="form-control" value="">
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
                 
                    
                 