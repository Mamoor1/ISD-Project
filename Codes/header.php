<div id="divHeaderWrapper">
    <header class="header-standard-2">
        <div class="navbar navbar-wp navbar-arrow mega-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" title="Boomerang | One template. Infinite solutions">
                        <img src="images/boomerang-logo-black.png" alt="Boomerang | One template. Infinite solutions">
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown dropdown-meganav mega-dropdown-fluid">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="package.php">Package</a>
                        </li>
                        <li class="dropdown">
                            <a href="cars.php">Cars</a>
                        </li>
                        <li class="dropdown">
                            <a href="signup.php">Sign Up</a>
                        </li>
						
						<?php
							session_start();
							if($_SESSION['customer_login'] != 'yes'){
						?>
                        <li class="dropdown">
                            <a href="login.php">Customer Login</a>
                        </li>
						<?php 
							}
						?>
						<li class="dropdown">
                            <a href="sign-in.php">Owner</a>
                        </li>
                        <?php
							
							if($_SESSION['customer_login'] == 'yes'){
						?>
                        <li class="dropdown">
                            <a href="clogout.php">logout</a>
                        </li>
						<?php 
							}
						?>
                    </ul>
                   
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>        
</div>