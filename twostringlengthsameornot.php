<?php 

$n1 = 0;
$n2 = 0;
$string1 = "salman";
$string2 = "salmam";

$l1 = strlen($string1);
$l2 = strlen($string2);

for($i = 0; $i <= $l1; $i++){
   
    $n1 = $n1+1;
}

for($i = 0; $i <= $l2; $i++){
   
    $n2 = $n2+1;
}

if($n1==$n2){
  echo "Same length";
}else{

  echo "Not same Length";
}

?>