<?php
$conn = mysqli_connect("localhost","root","","e voting");
if($conn){
	echo "great";
}

$getData = $_GET['name'];
$query = mysqli_query($conn,"select name from autocomplete where name like='%"$getData" %'");
while($row=mysqli_fetch_assoc($query)){
$name[] = $row['name']; 	
}

echo $name;
?>