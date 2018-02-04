<?php
include("header.php");



if(!isset($_SESSION["unm"]))
header("Location:login.php");


if($_SESSION["role"] != "Admin")
header("Location:index.php")


?>
<h1 align=center >Block Property </h1>

            <?php

//==============================================

				$propid = $_REQUEST["propid"];

            	$qry="update Property Set status='Block' where Propertyid=$propid";


            	$con=new mysqli ("localhost","root","","proj");

            	$rows = $con->query($qry);

            	if($rows > 0)
            	echo("<h1> Property blocked $propid</h1>");
            	else
            	echo("<h1> Property not blocked $propid</h1>");



//================================================================




?>
 <?php
 include("footer.php");
?>