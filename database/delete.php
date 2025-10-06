delete<?php
	
	$conn=mysqli_connect("127.0.0.1","root","","mark",3307);
	$res=" ";
	$g=" ";
	if(isset($_POST['menu']))
	{
		header("location:e18.php");
		exit();
	}
	if(isset($_POST['submit']))
	{
	$id=$_POST['id'];
	
	$qur="delete from `birth` where `id`='$id'";
	$res=mysqli_query($conn,$qur);
	if(mysqli_affected_rows($conn)>0)
	{
	$g="data deleted";
	header("refresh:3");
	}	
	else
	{
	$g="error... try again";
	}

}

	$query="select * from `birth`";
	$res=mysqli_query($conn,$query);
	echo "there are:".mysqli_num_rows($res)."records";

?>
<html>
<head>
<title>delete</title>
</head>
<body>
<form method="post">
<table border="2">
	<tr>
		<td>id</td>
		<td>first name</td>
		<td>last name</td>
		<td>birth date</td>
	</tr>
<?php
	if(mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";	
		echo "<td>".$row['bdate']."</td>";
		echo "</tr>";
	}
}
?>
</table>
<input type="submit" name="menu" value="menu" >

enter id number to delete:<input type="text" name="id">
<br><input type="submit" name="submit" value="submit" >
<input type="reset" value="reset" ><br>
<?php echo " ".$g; ?>
</form>
</body>
</html>