insert<?php

$conn=mysqli_connect("127.0.0.1","root","","mark",3307);
$res=" ";
if(isset($_POST['insert']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$date=$_POST['bdate'];

	$qur="INSERT INTO `birth`(`fname`, `lname`, `bdate`) VALUES ('$fname','$lname','$date')";
	$res=mysqli_query($conn,$qur);
	if(mysqli_affected_rows($conn)>0)
{
	$res="data inserted";
}	
else
	{
	$res="error... try again";
	}
}
	if(isset($_POST['menu']))
	{
	header("location:e18.php");
	exit();
	}
?>

<html>
<head>
<title>Insert Record</title>
<style>
.btn
{
margin:15px;
}
</style>
</head>
<body bgcolor="pink">
<center>
<form method="post">
<div style="border:1px solid;padding:20px; background:lightblue">
<h2><b>Insert Record</b></h2><br>
Enter First Name<br><input type="text" name="fname"><br>
Enter Last Name<br><input type="text" name="lname"><br>
Enter Birthdate<br><input type="text" name="bdate"><br>
<input type="submit" name="insert" value="submit">
<input type="reset" value="clear"><br>
<input type="submit" name="menu" value="menu" >
<br><h2><b><?php echo $res; ?></b></h3>
</div>
</form>
</center>
</body>
</html>