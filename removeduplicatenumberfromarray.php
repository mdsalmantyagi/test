<?php

$inputarray=array('2','4','8','2','4','8','5','1','7','6','9','10','3');
$outputarray = array();

foreach ($inputarray as $inputarrayitem) {
	foreach ($outputarray as $outputarrayitem) {
		if($inputarrayitem==$outputarrayitem){
			continue 2;
		}
	}
	$outputarray[] = $inputarrayitem;
}
print_r($outputarray);

?>