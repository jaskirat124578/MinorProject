<?php
include("header.php");

?>

<h1 align=center> All Registered Users </h1>

<br>
<br>



<form align="center">
<input  type=submit name=search2 value='View All'>
</form>
<br>
<br>
<?php

if( isset($_REQUEST["search2"]))
 {



		$qry = "Select * from User";


		$con = new mysqli("localhost","root","","proj");

		$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center>  Details</h1>");
			echo("<table align=center border=2 cellspacing=0 cellpadding=5 width=80%>");
            echo("                            <tr>
            								  <th>Username</th>
							                  <th>Firstname</th>
											  <th>Lastname</th>
			                                  <th>Password</th>
											  <th>Contact</th>
											  <th>Emailid</th>
											  <th>DOB</th>
											  <th>State</th>
											  <th>City</th>
											  <th>Gender</th>

											  <th>Role</th>
                                              <th>Update</th>
                                              <td>Status</td>
											  </tr>
                                              ");
				while($row = $result->fetch_object())
				{

                     $firstname=$row->firstname;
					 $lastname= $row->lastname;
					 $username = $row->username;
					 $password=$row->password;
					 $dob=$row->dob;
					 $state=$row->state;
					 $city=$row->city;
					 $gender=$row->gender;
					 $contact=$row->contact;
					 $email=$row->email;
					 $role=$row->Role;
  					 $status=$row->Status;

       				 echo("		  <tr>
       				              <td>$username</td>
								  <td>$firstname</td>
								  <td>$lastname</td>
								  <td>$password</td>
								  <td>$contact</td>
								  <td>$email</td>
								  <td>$dob</td>
								  <td>$state</td>
								  <td>$city</td>
								  <td>$gender</td>

								  <td>$role</td>

                                  <td><a href='profileupdate.php?username=$username'>Update</a></td>");

                                  if($status == "Block")
                                  	echo("<td><a href='unblockuser.php?username=$username'>$status</a></td>");
                                  else
                                  echo("<td><a href='blockuser.php?username=$username'>$status</a></td>");


								  echo("</tr>");




				}
			echo("</table>");
		}
		else
			echo("No data found.");
}
 include("footer.php");
?>
