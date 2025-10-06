<?php

$conn=mysqli_connect("127.0.0.1","root","","mark",3307);
$tot=0;
$per=0.0;
$res=" ";
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$rno=$_POST['rno'];
	$name=$_POST['nm'];
	$m1=$_POST['m1'];
	$m2=$_POST['m2'];
	$m3=$_POST['m3'];
	$tot=$m1+$m2+$m3;
	$per=$tot/3;
	$per=round($per,2);

$que="INSERT INTO `mark1`(`id`, `rno`, `name`, `m1`, `m2`, `m3`, `tot`, `per`) 
VALUES('$id','$rno','$name','$m1','$m2','$m3','$tot','$per')";

if(mysqli_query($conn,$que))
{
	$res="Data Inserted Succesfully";
}
}
?>
<html>
<head>
<title>p 14</title>
</head>
<body>
<form method="post">
<h1 align="center">student marksheet</h1>
<table align="center" border="2">
	<tr>
		<td>id</td>
		<td><?php echo" ".$id; ?></td>
	</tr>
	<tr>
		<td>roll no</td>
		<td><?php echo" ".$rno; ?></td>
	</tr>
	<tr>
		<td>name</td>
		<td><?php echo" ".$name; ?></td>
	</tr>
	<tr>
		<td>m1</td>
		<td><?php echo" ".$m1; ?></td>
	</tr>
	<tr>
		<td>m2</td>
		<td><?php echo" ".$m2; ?></td>
	</tr>
	<tr>
		<td>m3</td>
		<td><?php echo" ".$m3; ?></td>
	</tr>
	<tr>
		<td>total</td>
		<td><?php echo" ".$tot; ?></td>
	</tr>
	<tr>
		<td>per</td>
		<td><?php echo" ".$per; ?></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo " ".$res;  ?></td>
	</tr>
</table>
</form>
</body>
</html>









