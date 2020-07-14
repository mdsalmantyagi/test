<?php

$first = array(1, 2, 3, 4);
$second = array(1, 1, 1, 1);
$addTwoArray[]='';
for($i = 0; $i < count($first); $i++){
	$addTwoArray[]=$first[$i]+$second[$i];
}
echo implode(' ',$addTwoArray);
?>