<?php
session_start();


if(isset($_POST['sb']))
{
$unm=$_POST['em'];
$pass=$_POST['pass'];

if(isset($_POST['rem']) && $_POST['rem']=="rem")
{
	setcookie("unm",$unm,time()+(86400*30),"/");
	setcookie("pass",$pass,time()+(86400*30),"/");
}
}
?>

<html>
<head>
<title>cookies</title>
</head>
<body>
<form method="post">
<table border="2" align="center">
<tr>
<td colspan="2" style="text-align:center">
<h2>sign in</h2></td>
</tr>
<tr>
	<td>enter username:</td>
	<td><input type="text" name="em" value="<?php if(isset($_COOKIE["unm"])) {echo $_COOKIE["unm"];} ?>" />
</td>
</tr>
<tr>
	<td>enter password:</td>
	<td><input type="password" name="pass" value="<?php if(isset($_COOKIE["pass"])) {echo $_COOKIE["pass"];} ?>" />
</td>
</tr>
<tr>
	<td colspan="2"><input type="checkbox" value="rem" name="rem" />remember me</td>
</tr>
<tr>
<td><input type="submit" name="sb" value="log in" />
</td>
<td><input type="reset" name="re" value="clear" />
</td>
</tr>
</table>
</body>
</html>







