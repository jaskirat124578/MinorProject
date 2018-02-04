<?php
include("header.php");

if(!isset($_SESSION["unm"]))
header("Location:login.php");
$unm = $_SESSION["unm"];


?>
<h1 align=center >PROPERTY UPDATE </h1>

            <?php

//==============================================
            if(isset($_REQUEST["update1"]))
            {

            	$category=$_REQUEST["pt"];
            	$size=$_REQUEST["size"];
            	$price=$_REQUEST["price"];
            	$wantto=$_REQUEST["wt"];
            	$selecttype=$_REQUEST["select"];
            	$city=$_REQUEST["city"];
            	$state=$_REQUEST["st"];
            	$role="Guest";

            	$qry="update Property Set Category = '$category', Size = '$size',Price='$price',City='$city',State='$state',WantTo='$wantto',Type='$selecttype' where username='$unm'";


            	$con=new mysqli ("localhost","root","","proj");

				$rows=$con->query($qry);
				if($rows>0)
					echo("Updation successfull");
				else
					echo("Updation not successfull");
				}

//================================================================


            $propid = $_REQUEST["propid"];

				$qry = "Select * from property where Propertyid = $propid";


            	$con=new mysqli ("localhost","root","","proj");
            	$result = $con->query($qry);

		if($result->num_rows >0 )
		{
			echo("<h1 align=center>  Details</h1>");
				if($row = $result->fetch_object())
				{



echo("<form action=propertyupdate.php method=get>

<table width=50% align=center style='margin-top:-120px' >


<tr><td style='padding: 10px'>   Property ID: </td><td>    <input type=text name=propid  value=$row->PropertyId readonly> </td></tr>

");


 			$Category = $row->Category;
 			?>

 			<tr><td style='padding: 10px'>  Category : </td><td>    <input type=radio  name=pt value=Residential <?php if($Category=="Residential") echo("Checked"); ?> >Residential
															        <input type=radio  name=pt value=Commercial <?php if($Category=="Commercial")echo("Checked"); ?> >Commercial </td></tr>

			<?php






echo(" <br>
 			  <tr><td style='padding: 10px'>   Enter  Size(in Sq.meter): </td><td>    <input type=text name=size  value=$row->Size /> </td></tr>

              <tr><td style='padding: 10px'>     Enter  Price</td><td>   <input type=text name=price value=$row->Price />   </td></tr>




");

                $WantTo = $row->WantTo;

                ?>

                <tr><td style='padding: 10px'>  Want To : </td><td>    <input type=radio id=Sell name=wt value=Sell <?php if($WantTo=="Sell") echo("Checked"); ?> >Sell
																		 	   <input type=radio id=Rent name=wt value=Rent<?php if($WantTo=="Rent")echo("Checked"); ?> >Rent  </td></tr>




				<?php

				echo("		<br><br>

								 <tr><td style='padding: 10px'>    Select Type    </td><td>               <select name=select>
								 																	<option>$row->Type</option>
												 											<option>Apartment</option>
																				 								<option>FarmHouse</option>
																				 			                    <option>Villas</option>
																				 								 <option>Shop</option>
																				 								 <option>Floor</option>
																				 								 <option>Flats</option>								 										</select>   </td></tr>
				 <tr><td style='padding: 10px'>  Enter state  </td><td>               <select name=st>
				 																	<option>$row->State</option>
											 													<option>New Delhi</option>
								 													<option>Rajasthan</option>
								 													<option>UP</option>
								 													<option>Goa</option>
								 													<option>Punjab</option>
								 													<option>Gujarat</option>
					 										</select>   </td></tr>

					<tr><td style='padding: 10px'>  Enter city </td><td>               <select name=city>
																					<option>$row->City</option>
								 																					 													<option>New Delhi</option>
																											 													<option>Jaipur</option>
																													 													<option>Lucknow</option>
																													 													<option>Goa</option>
																													 													<option>Amritsar</option>
																													 													<option>Ahmedabad</option>

								 										</select>   </td></tr>


                <br><br>
 				<tr><td style='padding: 10px'>  <input type=submit name=update1 value='update'> </td></tr>
 				<br><br>
 				<tr><td style='padding: 10px'>  <input type=reset  value='clear'>  </td></tr>
</table>
 			</form>
");


				}

			}

		else
			echo("No data found.");




?>
  	</body>
 </html>
 <?php
 include("footer.php");
?>