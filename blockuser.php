<?php
include("header.php");

?>
<h1 align=center >Block User </h1>

            <?php

//==============================================

				$username = $_REQUEST["username"];

            	$qry="update User Set status='Block' where username='$username'";


            	$con=new mysqli ("localhost","root","","proj");

            	$rows = $con->query($qry);

            	if($rows > 0)
            	echo("<h1> User blocked '$username'</h1>");
            	else
            	echo("<h1> User not blocked '$username'</h1>");



//================================================================




?>
 <?php
 include("footer.php");
?>