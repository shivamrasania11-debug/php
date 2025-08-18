<?php

$a=array(20,4,5,2,11,7,89,90,23,88);
$n=10;

$max=$min=$a[0];
	foreach($a as $c)
	{
		if($c > $max)
		{
		$max=$c;
		}
		if($c < $min)
		{
		$min=$c;
		}
	}
		   
?>
<html>
<head>
<title>array</title>
</head>
<body>
<form>
<table border="1" align="center">
	<tr>
		<td>Array</td>
		<td><?php
			foreach($a as $value)
			{
				echo " ".$value;
			}
		    ?>
		</td>
	</tr>
	<tr>
		<td>maximum elements:</td>
		<td><?php echo " ".$max; ?></td>
	</tr>
	<tr>
		<td>minimum elements:</td>
		<td><?php echo " ".$min; ?></td>
	</tr>
	<tr>
		<td>in asending order:</td>
		<td><?php 
			for($i=0;$i<$n;$i++)
			{
				for($j=0;$j<$i;$j++)
				{
					if($a[$i]<$a[$j])
					{	
						$temp=$a[$i];
						$a[$i]=$a[$j];
						$a[$j]=$temp;
					}
				}
			}
			for($i=0;$i<$n;$i++)
			{
				echo " ".$a[$i];
			}
		 ?></td>
	</tr>
		<tr>
		<td>in decending order:</td>
		<td><?php 
			for($i=0;$i<$n;$i++)
			{
				for($j=0;$j<$i;$j++)
				{
					if($a[$i]>$a[$j])
					{	
						$temp=$a[$i];
						$a[$i]=$a[$j];
						$a[$j]=$temp;
					}
				}
			}
			for($i=0;$i<$n;$i++)
			{
				echo " ".$a[$i];
			}
		 ?></td>
	</tr>
</table>
</form>
</body>
</html>
