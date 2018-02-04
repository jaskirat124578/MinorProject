
<?php

session_start();



echo("<ul class='nav navbar-nav navbar-right'>");

echo("<li><a href='index.php'><i class='fa fa-home'></i><br>Home</a></li>");


if(isset($_SESSION["unm"]) && $_SESSION["role"] == "Admin" )
{
		echo("<!--Admin-->");
		echo("<li class='dropdown active'>");
		echo("<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='1000'>");
		echo("<i class='fa fa-home'></i><br>Admin <span class='caret'></span>");
		echo("</a>");
		echo("<ul class='dropdown-menu dropdown-menu-left' role='menu'>");
		echo("<li><a href='adminsearch1.php'>View All Property</a></li>");
		echo("<li><a href='block1.php'>Block Property</a></li>");
		echo("<li><a href='unblock1.php'>Unblock Property</a></li>");
		echo("</ul>");
		echo("</li>");


		echo("<!--User-->");
		echo("<li class='dropdown active'>");
		echo("<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='1000'>");
		echo("<i class='fa fa-home'></i><br>User <span class='caret'></span>");
		echo("</a>");
		echo("<ul class='dropdown-menu dropdown-menu-left' role='menu'>");
		echo("<li><a href='adminsearch2.php'>View All User</a></li>");
		echo("<li><a href='block2.php'>Block User</a></li>");
		echo("<li><a href='unblock2.php'>Unblock User</a></li>");
		echo("</ul>");
		echo("</li>");
}


		echo("<!--Property-->");
		echo("<li class='dropdown active'>");
		echo("<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='1000'>");
		echo("<i class='fa fa-home'></i><br>Property <span class='caret'></span>");
		echo("</a>");
		echo("<ul class='dropdown-menu dropdown-menu-left' role='menu'>");
		echo("<li><a href='addproperty.php'>Add</a></li>");
		echo("<li><a href='searchproperty.php'>Search</a></li>");
		echo("<li><a href='userproperty.php'>Update</a></li>");
		echo("<li><a href='deleteuser.php'>Delete</a></li>");
		echo("</ul>");
		echo("</li>");

if(isset($_SESSION["unm"]))
{
		echo("<!--Setting-->");

		echo("<li class='dropdown active'>");
		echo("<a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='1000'>");
		echo("<i class='fa fa-home'></i><br>Setting <span class='caret'></span>");
		echo("</a>");
		echo("<ul class='dropdown-menu dropdown-menu-left' role='menu'>");
		echo("<li><a href='profileupdate.php'>Update Profile</a></li>");
		echo("<li><a href='password.php'>Change Password</a></li>");
		echo("</ul>");
		echo("</li>");
}


echo("<li><a href='about.php'><i class='fa fa-user'></i><br>About</a></li>");
echo("<li><a href='contact.php'><i class='fa fa-envelope'></i><br>Contact</a></li>");

if(isset($_SESSION["unm"]))
echo("<li><a href='logout.php'><i class='fa fa-home'></i><br>Logout</a></li>");
else
echo("<li><a href='login.php'><i class='fa fa-home'></i><br>Login</a></li>");


echo("</ul>");


?>