<?php
include("header.php");

?>

<h1 align=center> Search Property Here </h1>
<form action=searchproperty.php method=POST >

<table width=50% align=center >


<tr><td style="padding: 10px">Property Type(Residential/Commercial) : </td><td>
<input type=radio id=Residential name=type value=Residential checked>Residential
									<input type=radio id=Commercial name=type value=Commercial>Commercial  </td> </tr>

 <tr><td style="padding: 10px">  Select Type  </td><td>               <select name=prop>
 																				<option>Apartment</option>
																																								 								<option>FarmHouse</option>
																																								 			                    <option>Villas</option>
																																								 								 <option>Shop</option>
																																								 								 <option>Floor</option>
																				 								 <option>Flats</option>
								 										</select>   </td></tr>

<tr><td style="padding: 10px">Want To : </td><td>  <input type=radio name=wt value=Sell checked>Sell
									<input type=radio name=wt value=Rent>Rent  </td> </tr>

<tr><td style="padding: 10px">     Enter  Size(in Sq.meter)</td><td> <input type=text name=size1 > to <input type=text name=size2 ></td></tr>


<tr><td style="padding: 10px">     Enter  Price</td><td> <input type=text name=p1 > to <input type=text name=p2 ></td></tr>



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






<tr><td style="padding: 10px">  <input type=submit name=search value='search'> </td></tr>

 				<tr><td style="padding: 10px">  <input type=reset  value='clear'>  </td></tr>
</table>



</form>








<?php

 if(isset($_REQUEST["search"]))
            {

				            	$type=$_REQUEST["type"];
				            	$prop=$_REQUEST["prop"];
				            	$wantto=$_REQUEST["wt"];

				            	if($wantto == "Buy")
				            	$wantto ="Sell";



				            	$size1=$_REQUEST["size1"];
				            	$size2=$_REQUEST["size2"];

				            	$p1=$_REQUEST["p1"];
				            	$p2=$_REQUEST["p2"];

				            	$city=$_REQUEST["city"];
		            	        $state=$_REQUEST["st"];

		$qry = "Select * from Property where category='$type' and  wantto='$wantto' and (Price between $p1 and $p2)and (Size between $size1 and $size2) and type='$prop' and city='$city' and state='$state'";

			echo($qry);

		$con = new mysqli("localhost","root","","proj");

		$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center>  Details</h1>");
			echo("<table align=center border=2 cellspacing=0 cellpadding=5 width=80%>");
            echo("                            <tr>
							                  <th>Category</th>
											  <th>Type</th>
			                                  <th>State</th>
											  <th>City</th>
											  <th>Size</th>
											  <th>Price</th>
											  </tr>
                                              ");
				while($row = $result->fetch_object())
				{

					 $Size = $row->Size;
					 $Price = $row->Price;
					 $Category=$row->Category;
					 $Type=$row->Type;
					 $State=$row->State;
					 $City=$row->City;

       				 echo("		  <tr>
								  <td>$Category</td>
								  <td>$Type</td>
								  <td>$State</td>
								  <td>$City</td>
								  <td>$Size</td>
								  <td>$Price</td>
								  </tr>");




				}
			echo("</table>");
		}
		else
			echo("No data found.");
}
 include("footer.php");
?>
