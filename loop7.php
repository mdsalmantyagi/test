<?php
$i=1;
$j=1;

for($i=1; $i<=10; $i++){

for($j=1; $j<=$i; $j++){

if($j%2==0){
	
	echo "# &nbsp&nbsp";
	
}else{
	
echo "* &nbsp &nbsp";

}

}

echo "<br><br>";

}
?>