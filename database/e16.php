<?php

$conn=mysqli_connect("127.0.0.1","root","","mark",3307);

$sql="select * from `mark1`";
$res=mysqli_query($conn,$sql);
$cont=mysqli_num_rows($res);

if(isset($_POST['submit']))
{
	for($i=1;$i<=$cont;$i++)
	{
		if(isset($_POST['chk'.$i]))
		{
			$sql1="delete from `mark1` where `id`=".$_POST['chk'.$i];
			mysqli_query($conn,$sql1);
			echo "deleted id is:";
			echo $_POST['chk'.$i];
		}
	}
		$res=mysqli_query($conn,$sql);
}
?>

<html>
<head>
<title>p 16</title>
</head>
<body>
<form method="post">
<table border="2">
	<tr>
		<td>id</td>
		<td>roll no</td>
		<td>name</td>
		<td>marks1</td>
		<td>marks2</td>	
		<td>marks3</td>
		<td>total</td>
		<td>percentage</td>
		<td>select</td>
	</tr>
	<?php
		if(mysqli_num_rows($res)>0)
		{
			while($row=mysqli_fetch_assoc($res))
			{
	?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['rno']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['m1']; ?></td>
		<td><?php echo $row['m2']; ?></td>
		<td><?php echo $row['m3']; ?></td>
		<td><?php echo $row['tot']; ?></td>
		<td><?php echo $row['per']; ?></td>	
		<td><input type="checkbox" name="<?php echo 'chk'.$row['id']; ?>" value="<?php echo $row['id']; ?>"</td>
	</tr>

	<?php
		}
		}?>
	<tr>
	<td colspan="9">
	<input type="submit" name="submit" value="delete"/>&nbsp;&nbsp;<input type="reset" name="clear" value="clear"/>
	</td>
	</tr>



</table>
</form>
</body>
</html>