
<?php
include("header.php");

if(!isset($_SESSION["unm"]))
header("Location:login.php");
$unm = $_SESSION["unm"];


?>

<h1 align=center> Add Property Here </h1>
<form action=addproperty.php method=POST >

<table width=50% align=center >


<tr><td style="padding: 10px">Property Type(Residential/Commercial) : </td><td>  <input type=radio id=Residential name=pt value=Residential checked>Residential
									                                             <input type=radio id=Commercial name=pt value=Commercial>Commercial  </td> </tr>
	<tr><td style="padding: 10px">  Select Type  </td><td>               <select name=select>	<option>Apartment</option>
																				 				<option>FarmHouse</option>
																				 			     <option>Villas</option>
																				 		         <option>Shop</option>
																				 				 <option>Floor</option>
																				 				 <option>Flats</option>
								 										</select>   </td></tr>

<tr><td style="padding: 10px">Want To : </td><td>  <input type=radio id=Sell name=wt value=Sell checked>Sell
									<input type=radio id=Rent name=wt value=Rent>Rent  </td> </tr>

<tr><td style="padding: 10px">     Enter  Size(in Sq.meter)</td><td> <input type=text name=size ></td></tr>


<tr><td style="padding: 10px">     Enter  Price</td><td> <input type=text name=price ></td></tr>




				 <br><br>
				 <tr><td style="padding: 10px">  Enter state  </td><td>               <select name=st>
								 													<option>New Delhi</option>
								 													<option>Rajasthan</option>
								 													<option>UP</option>
								 													<option>Goa</option>
								 													<option>Punjab</option>
								 													<option>Gujarat</option>
								 										</select>   </td></tr>

					<tr><td style="padding: 10px">  Enter city </td><td>               <select name=city>
								 													<option>New Delhi</option>
								 													<option>Jaipur</option>
								 													<option>Lucknow</option>
								 													<option>Goa</option>
								 													<option>Amritsar</option>
								 													<option>Ahmedabad</option>
								 										</select>   </td></tr>




<tr><td style="padding: 10px">  <input type=submit name=add value='add'> </td></tr>

 				<tr><td style="padding: 10px">  <input type=reset  value='clear'>  </td></tr>
</table>

</table>

</form>


<?php
if(isset($_REQUEST["add"]))
{

		            	$property=$_REQUEST["pt"];
		            	$wantto=$_REQUEST["wt"];
		            	$size=$_REQUEST["size"];
		            	$price=$_REQUEST["price"];
		            	$selecttype=$_REQUEST["select"];
		            	$city=$_REQUEST["city"];
		            	$state=$_REQUEST["st"];



		$qry = "Insert into Property(Category,Type,WantTo,Price,Size,State,City,Username) values('$property','$selecttype','$wantto','$price','$size','$state','$city','$unm')";

		$con = new mysqli("localhost","root","","proj");

		$rows = $con->query($qry);

		if($rows>0)
			echo("Data inserted successfully.");
		else
			echo("No data inserted successfully.");





}


 include("footer.php");
?>