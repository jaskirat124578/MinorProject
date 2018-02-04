<?php
include("header.php");


if(!isset($_SESSION["unm"]))
header("Location:login.php");
$unm = $_SESSION["unm"];

?>

<h3 align=center>Your Entered Properties</h3>

<br>
<br>



<form align="center">
<input  type=submit name=search1 value='View All'>
</form>
<br>
<br>
<?php

if( isset($_REQUEST["search1"]))
 {



		$qry = "Select * from Property where username='$unm'";


		$con = new mysqli("localhost","root","","proj");

		$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center>  Details</h1>");
			echo("<table align=center border=2 cellspacing=0 cellpadding=5 width=80%>");
            echo("                            <tr>
            								  <th>PropertyID</th>
							                  <th>Category</th>
											  <th>Type</th>
			                                  <th>State</th>
											  <th>City</th>
											  <th>Size</th>
											  <th>Price</th>
											  <th>Update</th>
											  </tr>
                                              ");
				while($row = $result->fetch_object())
				{

                     $Propertyid=$row->PropertyId;
					 $Size = $row->Size;
					 $Price = $row->Price;
					 $Category=$row->Category;
					 $Type=$row->Type;
					 $State=$row->State;
					 $City=$row->City;

       				 echo("		  <tr>
       				              <td>$Propertyid</td>
								  <td>$Category</td>
								  <td>$Type</td>
								  <td>$State</td>
								  <td>$City</td>
								  <td>$Size</td>
								  <td>$Price</td>
                                  <td><a href='propertyupdate.php?propid=$Propertyid'>Update</a></td>");




								  echo("</tr>");




				}
			echo("</table>");
		}
		else
			echo("No data found.");
}
 include("footer.php");
?>
