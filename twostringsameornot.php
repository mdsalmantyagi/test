<?php 
$string1 = "salman";
$string2 = "salmam";

$n1 = strcmp($string1,$string2);


if($n1){
	echo "same";
}else{
	echo "not same";
}

?>