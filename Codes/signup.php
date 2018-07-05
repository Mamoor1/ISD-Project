
<!DOCTYPE html>
<?php 
	include 'connection.php';
	
	
	if($_POST){
		$name = $_POST['name'];
		$address = $_POST['address'];
		 $phone = $_POST['phone'];
		 $email = $_POST['email'];
		 $password = $_POST['password'];
		 $sql = "INSERT INTO customer(address,password,name,phone,email) VALUES ('$address','$password','$name','$phone','$email')";
		$query = mysqli_query($conn, $sql);
		if ($query){ 
			header('location:login.php');
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
                                        <h2>Sign Up</h2>
                                    </div>
                                    <div class="form-body">
                                        <form action="" id="frmLogin" class="sky-form" method="post">                                    
                                            <fieldset>
												<section>
                                                    <div class="form-group">
                                                        <label class="label">Name</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="name">
                                                        </label>
                                                    </div>     
                                                </section>
												<section>
                                                    <div class="form-group">
                                                        <label class="label">Address</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="address">
                                                        </label>
                                                    </div>     
                                                </section>
												<section>
                                                    <div class="form-group">
                                                        <label class="label">Phone</label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="tel" name="phone">
                                                        </label>
                                                    </div>     
                                                </section>
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
                                                        <span>Sign up</span>
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

    