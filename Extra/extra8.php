<?php
#8.write a array program  for print reverse elements of array in php.

$abc=array("abc","ans","bhn");

$len=0;
foreach($abc as $value)
{
	$len++;
}
echo "reverse elements:";
for($i=$len-1;$i>=0;$i--)
{
	echo $abc[$i]." ";
}
?>