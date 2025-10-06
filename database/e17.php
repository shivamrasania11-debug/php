<?php

$conn=mysqli_connect("127.0.0.1","root","","mark",3307);

?>

<html>
<head>
<title>p 17</title>
</head>
<body>
<?php
	$sql="select * from `user` where username like 'a%'";
	$res=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($res)>0)
	{
?>
<table border="1">
	<tr>
		<th>id</th>
		<th>username</th>
		<th>gender</th>
		<th>gmail</th>
		<th>mo. no.</th>
	</tr>
	<?php
		while($row=mysqli_fetch_assoc($res))
		{	
	?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['gmail']; ?></td>		
		<td><?php echo $row['mobile']; ?></td>
	</tr>
	<?php
		}
		}
		else
		{
		echo "no data found";
		}
	?>
	

</table>
</body>
</html>