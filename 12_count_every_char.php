<?php

if(isset($_POST['submit']))
{
	$str=$_POST['str'];

	$len=strlen($str);

}

?>


<html>
<head>
	<title>count char</title>
</head>
<body>
<form method="post">
	<table border="1" align="center">
	<tr>
		<td>enter string:</td>
		<td><input type="text" name="str"></td>
	</tr>
	<tr align="center">
		<td colspan="2"><?php
		for($i=0;$i<$len;$i++)
		{
			$count=0;
			for($j=0;$j<$i;$j++)
			{
				if($str[$i]==$str[$j])
				{
					$count=1;
				}
			}
	
		if($count==1) continue;
		{
			for($j=0;$j<$len;$j++)
			{
				if($str[$i]==$str[$j])
				{
					$count++;
				}
			}
	
		}
		echo $str[$i]."=".$count."<br>";
		}

		?></td>
	</tr>
	<tr align="center">
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>
	</table> 
</form>
</body>
</html>
