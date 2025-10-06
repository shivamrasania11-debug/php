display<html>
<head>
<title>display</title>
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
	$conn=mysqli_connect("127.0.0.1","root","","mark",3307);

	if(isset($_POST['menu']))
	{
		header("location:e18.php");
		exit();
	}
	$query="select * from `birth`";
	$res=mysqli_query($conn,$query);

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
	echo "total record:".mysqli_num_rows($res);
?>
</table>
	<input type="submit" name="menu" value="menu" >
</form>
</body>
</html>