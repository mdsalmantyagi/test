<?php
$noOfSpaces = 4;
for($i=1; $i<=5; $i++){
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
<!-- 
       1  
     2  2  
   3  3  3  
 4  4  4  4  
5  5  5  5  5  
--> 