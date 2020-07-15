<?php
$string = "salman";
$reverse[] = "";
$length = strlen($string);
for($i = 0; $i < $length; $i++){
	$reverse[] = $string[$i];
}
echo implode('', $reverse);
?>