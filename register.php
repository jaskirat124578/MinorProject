<?php
include("header.php");



if(isset($_SESSION["unm"]))
die("<h1 align=center style='margin:px;'>Already register...</h1>");

?>


<!--//===================================================-->
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn" style="text-align:center;font-size:25px;">
                        <i class="fa fa-user"></i>
                        <h1 style="font-size:35px;">Register</h1>
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




<form action=register.php method=Post>

<table width=50% align=center style="margin-top:-120px;text-align:left;" >


 			<tr><td style="padding: 10px">     Enter  First name</td><td> <input type=text name=unm1 ></td></tr>

            <tr><td style="padding: 10px">   Enter Last name </td><td>   <input type=text name=unm2 ></td></tr>

 			 <tr><td style="padding: 10px">	Enter Username </td><td>   <input type=text name=unm ></td></tr>


 			  <tr><td style="padding: 10px"> Enter Password </td><td>    <input type=password name=pass ></td></tr>

              <tr><td style="padding: 10px"> Enter Contact no.</td><td>   <input type=text name=cont >    </td></tr>
              <tr><td style="padding: 10px"> Enter Email id </td><td>    <input type=text name=eid>  </td></tr>

                <tr><td style="padding: 10px;">  Enter dob</td><td>   <input type=date id=dob name=dob>  </td></tr>
                 <br><br>
                <tr><td style="padding: 10px">  Enter Gender</td><td>  <input type=radio id=male name=gen value=Male checked>Male
									<input type=radio id=female name=gen value=Female>Female   </td></tr>
						<br><br>
				 <tr><td style="padding: 10px">  Enter state  </td><td>               <select name=st>
								 													<option>New Delhi</option>
								 													<option>UP</option>
								 													<option>Gujarat</option>
								 													<option>Goa</option>
								 													<option>Rajasthan</option>
								 													<option>Punjab</option>
								 										</select>   </td></tr>

					<tr><td style="padding: 10px">  Enter city </td><td>               <select name=city>
								 													<option>New Delhi</option>
								 													<option>Amritsar</option>
								 													<option>Jaipur</option>
								 													<option>Ahmedabad</option>
								 													<option>Lucknow</option>
								 													<option>Goa</option>
								 										</select>   </td></tr>


                <br><br>
 				<tr><td style="padding: 10px">  <button type=submit class="btn" name=register >Register</button> <button type=reset   class="btn">clear</button> </td></tr>

</table>
 			</form>

            <?php
            if(isset($_REQUEST["register"]))
            {
            	$username=$_REQUEST["unm"];
            	$password=$_REQUEST["pass"];
            	$gender=$_REQUEST["gen"];
            	$firstname=$_REQUEST["unm1"];
            	$lastname=$_REQUEST["unm2"];
            	$email=$_REQUEST["eid"];
            	$contact=$_REQUEST["cont"];

            	$dob=$_REQUEST["dob"];
            	$city=$_REQUEST["city"];
            	$state=$_REQUEST["st"];
            	$role="User";

            	$qry="Insert into user values('$firstname','$lastname','$username','$password','$contact','$email','$dob','$gender','$state','$city','$role','Unblock')";

            	$con=new mysqli ("localhost","root","","proj");

				$rows=$con->query($qry);
				if($rows>0)
					echo("Registered successfully");
				else
					echo("username already exist");
				}
				?>
  	</body>
 </html>
 <?php
 include("footer.php");
?>