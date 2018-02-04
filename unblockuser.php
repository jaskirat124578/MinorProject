<?php
include("header.php");

?>
<h3 align=center >Unblock user </h3>

            <?php

//==============================================

				$username = $_REQUEST["username"];

            	$qry="update User Set status='Unblock' where username='$username'";


            	$con=new mysqli ("localhost","root","","proj");

            	$rows = $con->query($qry);

            	if($rows > 0)
            	echo("<h1> Property unblocked '$username'</h1>");
            	else
            	echo("<h1> Property not unblocked '$username'</h1>");



//================================================================




?>
 <?php
 include("footer.php");
?>