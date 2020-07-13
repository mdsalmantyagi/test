<?php

$first = array(1, 2, 3, 4);
$second = array(1, 1, 1, 1);

for($i = 0; $i < count($first); $i++){
	echo $first[$i]+$second[$i];
	echo "<br>";
}

?>