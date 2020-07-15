<?php
$odd=1;
$k=0;
for($i=1; $i<=4; $i++){	
for($j=1; $j<=$odd; $j++){	
	echo "$j &nbsp&nbsp";	
}
echo "<br><br>";
$odd = $odd+2;
}
?>
<!-- 
1   

1   2   3   

1   2   3   4   5   

1   2   3   4   5   6   7  
 -->