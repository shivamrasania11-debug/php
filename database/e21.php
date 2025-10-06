<?php
$err1=" ";
$err2=" ";
$err3=" ";
$err4=" ";
$err5=" ";

if(isset($_POST["sb"]))
{
	$name=$_POST["nm"];
	$email=$_POST["email"];	
	$web=$_POST["url"];
	$com=$_POST["com"];

if(empty($name)  || empty($email))
{
$err1=$err2="required/invalid";
}
else
{
if(!preg_match("/^[a-zA-Z]*$/",$name))
{
	$err1="name is not valid";
}
else
{	
	$err1="";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$err2="email is not valid";
}
else
{
$err2="";
}
if(!filter_var($web, FILTER_VALIDATE_URL) && !empty($web))
{
	$err3="url is not valid";
}
else
{
	$err3=" ";
}
if(!isset($_POST['gm']))
{
	$err5="gender should be selected";
}
else
{
	$err5=" ";
}
}
}
?>

<html>
<head>
<title>p 21</title>
</head>
<body>
<form method="post" action=" ">
<table border="2">
<tr>
	<td colspan="3"><h2>php form validation example</td>
</tr>
<tr>
	<td colspan="3">* Required Field</td>
</tr>
<tr>
	<td>name:</td>
	<td><input type="text" name="nm"></td>
	<td>*<?php echo $err1; ?></td>
</tr>
<tr>
	<td>e-mail:</td>
	<td><input type="text" name="email"></td>
	<td>*<?php echo $err2; ?></td>
</tr>
<tr>
	<td>website:</td>
	<td><input type="text" name="url"></td>
	<td>*<?php echo $err3; ?></td>
</tr>
<tr>
	<td>comment:</td>
	<td><textarea rows="5" name="com"></textarea></td>
	<td>*<?php echo $err4; ?></td>
</tr>
<tr>
	<td>gender:</td>
	<td><input type="radio" name="gn" />male
	    <input type="radio" name="gn" />female
	    <input type="radio" name="gn" />other
	</td>
	<td>*<?php echo $err5; ?></td>
</tr>
<tr>
<td colspan="3">
<input type="submit" name="sb" value="submit" />
</td>
</tr>
</table>
</form>
</body>
</html>