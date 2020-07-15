<?php
$array=array('2','4','8','5','1','7','6','7','4','9','10','3');
$max1 = 0;
$max2 = 0; 
for($i = 0; $i < count($array); $i++) {
    if($array[$i]>$max1){
    	$max2 = $max1;
    	$max1 = $array[$i];
    }
}
echo "firstgreatestnumberinarray<br>".$max1;
echo "<br>secondgreatestnumberinarray<br>".$max2;
?>