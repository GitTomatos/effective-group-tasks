<?php 
$num = 0;
$lastNum = 0;

echo "<p>";

for ($i = 0; $i < 64; $i++) {
	if ($i == 1 or $i == 2){
		$num = 1;
		$lastNum = 0;
	}
	$temp = $num;
	$num += $lastNum;
	$lastNum = $temp;
	echo $num . " ";
} 

echo "</p>";
?>