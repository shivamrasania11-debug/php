<?php

$res="";
if(isset($_POST['submit']))
{
	$str=$_POST['str'];
	$len=0;
	
	for($i=0;isset($str[$i]);$i++)
	{
		$len++;
		$res=$len;
	}
}

?>
<html>
<head>
	<title>length of string</title>
</head>
<body>
<form method="post">
<table border="1" align="center">
	<tr>
		<td>enter the string:</td>
		<td><input type="input" name="str"></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo " ".$res; ?></td>
	</tr>
	<tr>
		<td>result:</td>
		<td><input type="submit" name="submit"></td>
	</tr>
</table>
</form>
</body>
</html>

