<?php
$n=5;
$sum=0;
for($i=1;$i<=$n;$i++)
	$sum = $sum + $i;
echo 'Sum of first ',$n,' natural number is:', $sum;
$s=0;$n=0;
while($n<=10)
	{
	$s = $s + $n;
	$n++;
	}
echo '<br>'.'Sum of first ',$n-1,' natural number is:', $s;
do{
	$s = $s + $n;
	$n++;
	}while($n<=15);
echo '<br>'.'Sum of first ',$n-1,' natural number is:', $s;
?>
