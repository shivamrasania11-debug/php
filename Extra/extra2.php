<?php
#2.input number and print the number is Armstrong or not.
$res="";
if(isset($_POST['submit']))
{
	$n=$_POST['num'];

	$no=$n;
	$sum=0;

	while($n>0)
	{
		$r=$n%10;
		$sum=$sum+($r*$r*$r);
		$n=(int)($n/10);
	}
	if($sum==$no)
	{
		$res="no is armstrong";
	}
	else
	{
		$res="no is not armstrong";
	}
}
?>


<html>
<head>
<title>armstrong number</title>
</head>
<body>
<form method="post">
<table border="1" align="center">
	<tr>
		<td>enter the number:</td>
		<td><input type="text" name="num"></td>
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