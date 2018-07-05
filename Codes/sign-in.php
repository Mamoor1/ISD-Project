
<!DOCTYPE html>
<?php 
	include 'connection.php';
	session_start();
	if($_SESSION['logged_in'] == 'yes'){
		header('location:admin.php');
	}	
	
	if(!isset($_SESSION['logged_in'])){
		$_SESSION['logged_in'] = 'no';
	}
	
	if($_POST){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM owner WHERE email = '$email' AND password = '$password'";
		$query = mysqli_query($conn, $sql);
		if (mysqli_num_rows($query) >0){
		    while ($row = mysqli_fetch_array($query))
		    { 
                echo "<p>Hello,". $row['name']."!</p>";
    			echo $_SESSION['logged_in'] = 'yes';
    			echo $_SESSION['user_id'] = $row['owner_id'];
    			header('location:admin.php');
            }
        }
		mysqli_close($conn);
	}

?>
<html>
	<?php include 'includes_top.php'; ?>		
	
	<body>
		<div class="body-wrap">
			<section class="slice bg-white">
                <div class="wp-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                                <div class="wp-block default user-form"> 
                                    <div class="form-header">
                                        <h2>Sign in to your account</h2>
                                    </div>
                                    <div class="form-body">
                                        <form action="" id="frmLogin" class="sky-form" method="post">                                    
                                            <fieldset>                  
                                                <section>
                                                    <div class="form-group">
                                                        <label class="label">Email</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="email" name="email">
                                                        </label>
                                                    </div>     
                                                </section>
                                                <section>
                                                    <div class="form-group">
                                                        <label class="label">Password</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="password" name="password">
                                                        </label>
                                                    </div>     
                                                </section> 
                                                
                                                <section>
                                                    <button class="btn btn-base pull-right" type="submit">
                                                        <span>Sign in</span>
                                                    </button>
                                                </section>
                                            </fieldset>  
                                        </form>    
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

    