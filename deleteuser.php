<?php
include("header.php");


if(!isset($_SESSION["unm"]))
header("Location:login.php");


if($_SESSION["role"] != "Admin")
header("Location:index.php");


?>
<h1 align=center >Delete User </h1>
<form action=deleteuser.php method=POST >
<table width=50% align=center >

<tr><td style="padding: 10px">Enter the Username of user you want to delete</td><td> <input type=text name=unm ></td></tr>


<tr><td style="padding: 10px"> <input type=submit name=delete value='delete'> </td></tr>

</table>
</form>

            <?php


//==============================================

if(isset($_REQUEST["delete"]))
{
				$username = $_REQUEST["unm"];

            	$qry="Delete From user Where username='$username'";


            	$con=new mysqli ("localhost","root","","proj");

            	$rows = $con->query($qry);

            	if($rows > 0)
            	echo("<h1> user deleted </h1>");
            	else
            	echo("<h1> user not found </h1>");


}
//================================================================




?>
 <?php
 include("footer.php");
?>