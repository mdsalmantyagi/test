<?php
$i=1;
$j=1;
for ($i=1; $i<=5; $i++)
{
for ($j=1; $j<=$i; $j++)
{
if($j%2==0){
echo "0 &nbsp";
}else
{
echo "* &nbsp";
}
}
echo "<br><br>";
}
?>

<!--
*  

*  0  

*  0  *  

*  0  *  0  

*  0  *  0  *  
--> 