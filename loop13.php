<?php
for($i=1; $i<=6; $i++){
    for($j=1; $j<=6; $j++){
		if($j>=1 && $j<=$i){
        echo "*";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		}else{
			echo "  ";
		}
   }
   echo "<br><br>";
}
?>
<!-- 
* 
* * 
* * * 
* * * *
* * * * *
* * * * * *
 -->
