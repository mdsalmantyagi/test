<?php
$i=1;
$j=1;
$odd=1;
$k=5;
for($i=1; $i<=4; $i++){
	
for($j=1; $j<=$odd; $j++){
	
	echo "* &nbsp&nbsp";
	
}

echo "<br><br>";

$odd = $odd+2;

}

for($i = 1; $i <= 3; $i++){
	
	for($j = $k; $j >=1; $j--){
		
		echo "* &nbsp&nbsp";
	
}

echo "<br><br>";

$k = $k-2;

}
?>