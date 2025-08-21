<?php
#4.Write a php program to Reverse a string without function.
$res=" ";
if(isset($_POST['submit']))
{
	$str=$_POST['str'];

	$len=strlen($str);

	for($i=$len-1;$i>=0;$i--)
	{
		$res.= " ".$str[$i];
	}
}
?>


<html>
<head>
<title>reverse string</title>
</head>
<body>
<form method="post">
<table border="1" align="center">
	<tr>
		<td>enter the string:</td>
		<td><input type="text" name="str"></td>
	</tr>
	<tr>
		<td>result:</td>
		<td><?php echo " ".$res; ?></td>
	<tr>
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>
</table>
</form>
</body>
</html>