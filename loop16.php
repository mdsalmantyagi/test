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


for($i=1; $i<=5; $i++){

    for($j=1; $j<=5; $j++){
		
		if($j<=6-$i && $j>=1){
			
        echo "*";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		
		}else{
			
			echo "  ";
			
		}
	   
   }
   
   echo "<br><br>";

}

/*

* 
* * 
* * * 
* * * *
* * * * *
* * * * * *
* * * * *
* * * * 
* * * 
* * 
*


*/
?>
