<?php

session_start();

if(!isset($_SESSION["user"]))
{
	echo "<script>window.location='e15.php';</script>";
}
echo "welcome".$_SESSION["user"];
echo "<br><a href='e15.php'>sign out</a>";

?>