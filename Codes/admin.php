<?php
	session_start();
	$a = $_SESSION['user_id'] ;
	include 'connection.php';
	$sql = "SELECT * FROM owner WHERE owner_id = '$a' ";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0)
    {
	   while ($row = mysqli_fetch_array($query))
	   {
?>



<!DOCTYPE html>
<html>
	<?php include 'includes_top.php'; ?>		
	
	<body>

		<div class="body-wrap">
			<div class="pg-opt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2><?php echo $row['name'];?></h2>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">User account</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

    		<section class="slice bg-white">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row">
                    <?php include 'admin_navigation.php';?>
                    <div class="col-md-9">                     
                        <div class="tabs-framed">
                            <ul class="tabs clearfix">
                                <li class="active"><a href="#tab-1" data-toggle="tab">About me</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    <div class="tab-body">
                                        <dl class="dl-horizontal style-2">
                                            <h3 class="title title-lg">Personal information</h3>
                                            
                                            <dt>Your name</dt>
                                            <dd>
                                                <span class="pull-left"><?php echo $row['name'];?></span>
                                            </dd>
                                            <hr>
                                            <dt>Email</dt>
                                            <dd>
                                            <span class="pull-left"><?php echo $row['email'];?></span>
                                            </dd>
                                            <hr>
                                            <dt>Phone</dt>
                                            <dd>
                                                <span class="pull-left"><?php echo $row['phone'];?></span>
                                            </dd>
                                            <hr>
                                            <dt>Address</dt>
                                            <dd>
                                                <span class="pull-left"><?php echo $row['address'];?></span>
                                            </dd>
                                            
                                            
                                        </dl>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
			<?php include 'includes_bottom.php';?>
		</div>
	</body>
	
</html>
   
<?php 
        }
	}
    mysqli_close($conn);	
?>