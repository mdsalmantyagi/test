<?php
$array=array(1,2,3,4,5,0);
for($i=0;$i<count($array);$i++){
	if($array[$i]==$array[3]){
      $array[$i+1]=$array[3];
      $array[$i+1]=16;
	}
}
echo implode(' ',$array);
?>