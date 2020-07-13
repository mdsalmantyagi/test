<?php
$i=5;
$min=1;
$max=5;
for ($i=5; $i>=1; $i--)
{
for ($j=1; $j<=$i; $j++)
{
	if($i%2==0){
		
		echo "* &nbsp &nbsp";
	}else{
		
echo "$i &nbsp &nbsp";

}
}
echo "<br><br>";
}

?>