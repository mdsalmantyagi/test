<form method="POST" enctype="multipart/form-data">
Enter a Number<input type="text" name="number">
<input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub'])){
	$n = $_POST['number'];
function fact($n){
     if($n>1){
	   $factorial = 1;
	   $factorial = $n*fact($n-1);
	   return $factorial;
	 }else{
	   return 1; 
	 }		 	 
}
echo fact($n);
}
?>