<?php
include("header.php");


if(!isset($_SESSION["unm"]))
header("Location:login.php");


if($_SESSION["role"] != "Admin")
header("Location:index.php")

?>
<h1 align=center >Unblock Property </h1>
<form action=unblock1.php method=Post>

 			Enter propertyid <input type=text name=propid >
 				<br><br>


 				<input type=submit name=Unblock value='Unblock'>
 				<br><br>
 	</form>

            <?php

//==============================================

 if(isset($_REQUEST["Unblock"]))
{
				$propid = $_REQUEST["propid"];

            	$qry="update Property Set status='Unblock' where Propertyid=$propid";


            	$con=new mysqli ("localhost","root","","proj");

            	$rows = $con->query($qry);

            	if($rows > 0)
            	echo("<h1> Property Unblocked $propid</h1>");
            	else
            	echo("<h1> Property not Unblocked $propid</h1>");



//================================================================



}
?>
 <?php
 include("footer.php");
?>