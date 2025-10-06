<?php
session_start();

if(isset($_SESSION['count']))
{
echo "your session count:".$_SESSION['count']."<br/>";
$_SESSION['count']++;
}
else
{
	$_SESSION['count']=1;
	echo "session does not exist";
}
?>

