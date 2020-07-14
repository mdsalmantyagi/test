<?php
$array = array('1','2','3','4','5');
$l = count($array);
$arrayReverse[]='';
for($i = ($l-1); $i >= 0; $i--){
        $arrayReverse[]=$array[$i];
		}
echo implode(' ',$arrayReverse);
?>