<?php ob_start();
include("header.php");

if(isset($_SESSION["unm"]))
die("<h1 align=center style='margin:px;'>Already logged in...</h1>");

?>
<!--//===================================================-->
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn" style="text-align:center;font-size:25px;">
                        <i class="fa fa-user"></i>
                        <h1 style="font-size:35px;">Login</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us-text wow fadeInLeft">
<!--//===================================================-->


<center
              <br><br>
 			<form action=login.php method=Post>

	                    	<div class="form-group">
	                    		<label for="contact-name" style="font-size:20px;">Username</label>&nbsp;&nbsp;&nbsp;&nbsp;
	                        	<input type="text" name="unm" placeholder="Enter your username..." class="contact-name" style="font-size:20px;">
	                        </div>

	                    	<div class="form-group">
	                    		<label for="contact-name" style="font-size:20px;">Password</label>&nbsp;&nbsp;&nbsp;&nbsp;
	                        	<input type="text" name="pass" placeholder="Enter your password..." class="contact-name" style="font-size:20px;">
	                        </div>


 							<button type="submit" class="btn" name="Login">Login</button>
 				</form>


 				<br><br><a href='Register.php'>Register New User</a>



            <?php
            if(isset($_REQUEST["Login"]))
            {
            	$unm=$_REQUEST["unm"];
            	$pwd=$_REQUEST["pass"];


            	$qry="Select * from user where username='$unm' and password='$pwd'";

            	$con=new mysqli ("localhost","root","","proj");

				$result = $con->query($qry);

						if($result->num_rows >0 )
						{
							if($row = $result->fetch_object())
										$role = $row->Role;

										$_SESSION["unm"] = $unm;
										$_SESSION["role"] = $role;


								header("Location:index.php");



						}

						else
								echo("Invalid username password.");
	}
	?>

<?php
include("footer.php");
ob_end_flush(); ?>