<?php
include("header.php");


if(!isset($_SESSION["unm"]))
header("Location:login.php");
$unm = $_SESSION["unm"];


?>
<h1 align=center >PASSWORD UPDATE </h1>
<br><br>
<br>

            <?php
				$qry = "Select * from user where username='$unm'";


            	$con=new mysqli ("localhost","root","","proj");
            	$result = $con->query($qry);

		if($result->num_rows >0 )
		{

				if($row = $result->fetch_object())
				{



echo("<form action=password.php method=Post>

<table width=50% align=center style='margin-top:-120px' >




<br>
<br>


 			  <tr><td style='padding: 10px'> Enter Password </td><td>    <input type=password name=pass value=$row->password ></td></tr>
              <tr><td style='padding: 10px'> <input type=submit name=update >  </td></tr>
<br><br>

                </table>
 			</form>
");


				}

			}

		else
			echo("No data found.");



            if(isset($_REQUEST["update"]))
            {
            	$username="rookie";
            	$password=$_REQUEST["pass"];

            	$qry="update User Set password='$password' where username='$username'";


            	$con=new mysqli ("localhost","root","","proj");

				$rows=$con->query($qry);
				if($rows>0)
					echo("Updation successfull");
				else
					echo("Updation not successfull");
				}





?>
  	</body>
 </html>
 <?php
 include("footer.php");
?>