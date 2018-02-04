<?php
include("header.php");


if(!isset($_SESSION["unm"]))
header("Location:login.php");


if($_SESSION["role"] != "Admin")
header("Location:index.php")

?>
<h1 align=center >Block User </h1>

<form action=unblock2.php method=Post>

 			Enter username <input type=text name= unm >
 				<br><br>


 				<input type=submit name=unblock value='unblock'>
 				<br><br>
 	</form>

            <?php

//==============================================
if(isset($_REQUEST["unblock"]))
{

				$username = $_REQUEST["unm"];

            	$qry="update User Set status='Unblock' where username='$username'";


            	$con=new mysqli ("localhost","root","","proj");

            	$rows = $con->query($qry);

            	if($rows > 0)
            	echo("<h1> User blocked '$username'</h1>");
            	else
            	echo("<h1> User not blocked '$username'</h1>");



//================================================================



}
?>
 <?php
 include("footer.php");
?>