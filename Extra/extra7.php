<?php
#7.enter a string and count all upper,lower,digit,special character,blank spaces .
$res=" ";
if(isset($_POST['submit']))
{
	$str=$_POST['str'];
	$len=strlen($str);
	$upper=$lower=$digit=$special=$space=0;

	for($i=0;$i<$len;$i++)
	{
		$ch=$str[$i];

	if($ch >= 'A' && $ch <= 'Z')
	{
		$upper++;
	}
	else if($ch >= 'a' && $ch <= 'z')
	{
		$lower++;
	}
	else if($ch >= '0' && $ch <= '9')
	{
		$digit++;
	}
	else if($ch == ' ')
	{
		$space++;
	}
	else
	{
		$special++;
	}
	$res="uppercase:$upper,lowercase:$lower,digits:$digit,spaces:$space,special:$special";

}}

?>


<html>
<head>
<title>count string</title>
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