<?php
$i=1;
$j=1;
$noOfSpaces = 8;
for($i=1; $i<=9; $i++){

for($j=$noOfSpaces; $j>=1; $j--)
{

echo " &nbsp";

}	

for($j=1; $j<=$i; $j++){

	
echo "$i &nbsp";

}
echo "<br>";

$noOfSpaces = $noOfSpaces-1;

}
?>