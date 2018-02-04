<?php


session_start();
session_destroy();

include("header.php");

echo("<h1>Logout successfully..........<a href='login.php'>Login again</a></h1>");

include("footer.php");
?>