<?php
$con = mysqli_connect("localhost","root","","e voting");

?>
<html>
<head>
<title>forget password</title>
</head>
<body>
<form action="" method="POST">
your email:</br><input type="email" name="email"></br>
<input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['submit'])){
$email = $_POST['email'];

$query = mysqli_query($con,"select * from register where email='$email'");
    $count = mysqli_num_rows($query);
if($count==1)
{

$random = rand(72891,92729);

$new_password = $random;

$email_password = $new_password;

$new_password = md5($new_password);

$update = mysqli_query($con,"update register set password='$new_password' where email='$email'");


$to = "salmansallu1997@gmail.com";
$message = "Hello";
$subject = "Testing";
if(mail($to,$subject,$message)){
echo "True";
}

 }
else
{
  echo "<h2> This email does not exist</h2>";
	
	}
}
?>
</body>
</html>

