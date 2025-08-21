<?php

#1.input number and print the number is prime or not.
$res=" ";
if(isset($_POST['submit']))
{
	$n=$_POST['num'];

	if($n < 1)
	{
		$res= " number is not prime";
	}
	else if($n==2 || $n==3 || $n==5 || $n==7)
	{
		$res= " number is prime";
	}
	else if($n%2==0 || $n%3==0 || $n%5==0 || $n%7==0)
	{
		$res= " number is not prime";
	}
	else
	{
		$res= "number is prime";
	}
}

?>
<html>
<head>
<title>prime number</title>
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