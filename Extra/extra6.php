<?php
#6.input the number and print prime number and not prime numbers in php. 
$n=0;
if(isset($_POST['submit']))
{
 	$n=$_POST['n'];
}
?>

<html>
<head>
 <title>prime</title>
</head>
<body>
<form method="post">
<table border="solid">
<tr>
 <td>Enter n:</td>
 <td><input type="text" name="n"></td>
</tr>
<tr>
 <td><input type="submit" name="submit"></td>
</tr>
<tr>
 <td>Prime numbers :</td>
 <td>
 <?php  
 	if($n > 1)
{
   	for($i=2;$i<=$n;$i++)
	{
     		$count = 0;
    		for($j=1;$j<=$i;$j++)
		{
     			if($i % $j == 0)
			{
        		 $count++;
       			}
    		 }
     	if($count == 2)
	{   
      		 echo " ".$i;
     	}
  	 }
 }
 ?>
 </td>
</tr>
<tr>
 <td>Not prime :</td>
 <td>
 <?php  
 	if($n > 1)
	{
   		for($i=2;$i<=$n;$i++)
		{
		     $count = 0;
     		for($j=1;$j<=$i;$j++)
		{
		       if($i % $j == 0)
			{
       		 		 $count++;
       			}
     		}
     	if($count != 2)
	{
       	echo " ".$i;
     	}
   }
 }
 ?>
 </td>
</tr>
</table>
</form>
</body>
</html>