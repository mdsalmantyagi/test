<?php
for($i=1; $i<=6; $i++){
    for($j=1; $j<=6; $j++){
		if($j>=7-$i){	
        echo "*";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		}else{	
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
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