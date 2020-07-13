<?php

$string = "salman";
$new[] = "";
$length = strlen($string);

for($i = 0; $i < $length; $i++){

	
	$new[] = $string[$i];
	
}

$reverse=implode('', $new);
echo $reverse;


?>