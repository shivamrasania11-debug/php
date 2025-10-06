<?php

session_start();

$conn=mysqli_connect("127.0.0.1","root","","mark",3307);
$res=" ";
$output=" ";
if(isset($_POST['submit']))
{
	$unm=$_POST['uid'];
	$pwd=$_POST['pwd'];

$que="SELECT * FROM `login` WHERE `user`='$unm' AND `pass`='$pwd'";

$res=mysqli_query($conn,$que);

if(mysqli_num_rows($res)>0)
{
	$_SESSION["user"]=$unm;
	echo "<script>window.location='e-15.php';</script>";
}
else
{
$output="login unsuccesful";
}
}
?>
<html>
<head>
<title>p 15</title>
<style>
caption
{
background-color:black;
color:white;
text-align:left;
}
table
{
border:solid;
}
</style>
</head>
<body>
<form method="post">
<table>
	<caption>Login</caption>
	<tr>
		<td>username:</td>
		<td><input type="text" name="uid"></td>
	</tr>
	<tr>
		<td>password:</td>
		<td><input type="password" name="pwd"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit"></td>
	</tr>
</table>
</form>
<?php echo " ".$output;  ?>
</body>
</html>
