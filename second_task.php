<?php
$i=1;
$sum=0;
while(isset($argv[$i])){
	$sum += $argv[$i];	
	++$i;
}
echo $sum;
