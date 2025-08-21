<?php
#3.input number and print the number is palindrome or not.
$res="";
if(isset($_POST['submit']))
{
	$n=$_POST['num'];

	$no=$n;
	$rev=0;

	while($n > 0)
	{
		$r=$n%10;
		$rev=($rev * 10)+ $r;
		$n=(int)($n/10);
	}
	if($no==$rev)
	{
		$res="no is palindrome";
	}
	else
	{
		$res="no is not palindrome";
	}
}
?>


<html>
<head>
<title>palindrome number</title>
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