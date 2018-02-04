<?php
include("header.php");


if(!isset($_SESSION["unm"]))
header("Location:login.php");
$unm = $_SESSION["unm"];

?>
<h1 align=center >PROFILE UPDATE </h1>


            <?php



				$qry = "Select * from user where username='$unm'";


            	$con=new mysqli ("localhost","root","","proj");
            	$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center>  Details</h1>");
				if($row = $result->fetch_object())
				{



echo("<form action=profileupdate.php method=Post>

<table width=50% align=center style='margin-top:-120px' >


 			<tr><td style='padding: 10px'>     Enter  First name</td><td> <input type=text name=unm1 value=$row->firstname ></td></tr>

            <tr><td style='padding: 10px'>   Enter Last name </td><td>   <input type=text name=unm2 value=$row->lastname ></td></tr>




 			  <tr><td style='padding: 10px'> Enter Password </td><td>    <input type=password name=pass value=$row->password ></td></tr>

              <tr><td style='padding: 10px'> Enter Contact no.</td><td>   <input type=text name=cont value=$row->contact >    </td></tr>
              <tr><td style='padding: 10px'> Enter Email id </td><td>    <input type=text name=eid value=$row->email >  </td></tr>

                <tr><td style='padding: 10px'>  Enter dob</td><td>   <input type=date id=dob name=dob value=$row->dob >  </td></tr>
                 <br><br>");





                $gender = $row->gender;

                ?>

                <tr><td style='padding: 10px'>  Enter Gender</td><td>    <input type=radio id=male name=gen value=Male <?php if($gender=="Male") echo("Checked"); ?> >Male
																		 	   <input type=radio id=female name=gen value=Female <?php if($gender=="Female")echo("Checked"); ?> >Female   </td></tr>




				<?php

				echo("		<br><br>
				 <tr><td style='padding: 10px'>  Enter state  </td><td>               <select name=st>
								 													<option>New Delhi</option>
								 													<option>Rajasthan</option>
								 													<option>UP</option>
								 													<option>Goa</option>
								 													<option>Punjab</option>
								 													<option>Gujarat</option>
								 										</select>   </td></tr>

					<tr><td style='padding: 10px'>  Enter city </td><td>               <select name=city>
																					<option>$row->state</option>
																	 				<option>New Delhi</option>
								 													<option>Jaipur</option>
								 													<option>Lucknow</option>
								 													<option>Goa</option>
								 													<option>Amritsar</option>
								 													<option>Ahmedabad</option>
</select>   </td></tr>


                <br><br>
 				<tr><td style='padding: 10px'>  <input type=submit name=update value='update'> </td></tr>
 				<br><br>
 				<tr><td style='padding: 10px'>  <input type=reset  value='clear'>  </td></tr>
</table>
 			</form>
");


				}

			}

		else
			echo("No data found.");



            if(isset($_REQUEST["update"]))
            {

            	$password=$_REQUEST["pass"];
            	$gender=$_REQUEST["gen"];
            	$firstname=$_REQUEST["unm1"];
            	$lastname=$_REQUEST["unm2"];
            	$email=$_REQUEST["eid"];
            	$contact=$_REQUEST["cont"];
            	$dob=$_REQUEST["dob"];
            	$city=$_REQUEST["city"];
            	$state=$_REQUEST["st"];


            	$qry="update User Set firstname = '$firstname',lastname = '$lastname',dob='$dob',city='$city',state='$state',contact='$contact',gender='$gender',email='$email',password='$password' where username='$unm'";


            	$con=new mysqli ("localhost","root","","proj");

				$rows=$con->query($qry);
				if($rows>0)
					echo("Updation successfull");
				else
					echo("Updation not successfull");
				}





?>
  	</body>
 </html>
 <?php
 include("footer.php");
?>