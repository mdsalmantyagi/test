<?php
$conn = mysqli_connect("localhost","root","","test");
?>

<form method="post" enctype="multipart/form-data">
Name:<input type="name" name="name"><br><br>
Email:<input type="email" name="email"><br><br>
Qualification:<input type="qualification" name="qualification"><br><br>
<input type="submit" name="sub" value="Update">
</form>

<?php
if(isset($_POST['sub'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$qualification = $_POST['qualification'];

	$query = mysqli_query($conn,"UPDATE user SET name='$name',email='$email',qualification='$qualification' where email='salmansallu1997@gmail.com'");

	 if($query){
		echo "great";
	}else{
		echo "something is wrong";
	}
}
?>