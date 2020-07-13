<?php
$string = "i love my india";
$words = 0;
preg_replace('/\s+/', ' ',  trim($string));
	$words = explode(" ", $string);

$count = count($words);


?>