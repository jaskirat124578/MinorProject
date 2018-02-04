<?php
include("header.php");


if(!isset($_SESSION["unm"]))
header("Location:login.php");


if($_SESSION["role"] != "Admin")
header("Location:index.php")




?>
<h1 align=center >Block User </h1>

<form action=block2.php method=Post>

 				Enter username <input type=text name=unm >
 				<br><br>


 				<input type=submit name=block value='block'>
 				<br><br>
 	</form>

            <?php

//==============================================
if(isset($_REQUEST["block"]))
{

				$username = $_REQUEST["unm"];

            	$qry="update User Set status='Block' where username='$username'";


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