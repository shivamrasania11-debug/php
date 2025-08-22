<?php

$abc=array(1,2,3,4,5,6);
$sum=0;
$avg=0;

foreach($abc as $val)
{
	$sum=$sum+$val;
}
$avg=$sum/5;
echo "<br>sum of array elements:".$sum;
echo "<br>avg of array elements:".$avg;
?>
