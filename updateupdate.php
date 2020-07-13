<?php
$con = mysqli_connect("localhost","root","","e voting");
?>

<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
    $adharid = $_POST['adharid'];
    $pass = $_POST['pass'];
	$file = $_FILES['files']['name'];
	$tmp = $_FILES['files']['tmp_name'];
	
	move_uploaded_file($tmp,"image1/$file");

if(!empty($name)&&!empty($email)&&!empty($adharid)&&!empty($pass)&&!empty($file)){

if(strlen($name)<50&&strlen($email)<50&&strlen($adharid)<50&&strlen($pass)<60){
	
                      if($pass = md5($pass)){
	
                            if(filter_var($email,FILTER_VALIDATE_EMAIL)){

                                  if(isset($_GET['del'])){
	
                                            $id = $_GET['del'];
                            	
	                                         $query = mysqli_query($con,"SELECT * FROM template WHERE id='$id'");
											 
                                             $row = mysqli_fetch_assoc($fire);
                                            
                                             $query1 = mysqli_query($con,"UPDATE template SET name='$name', email='$email',  adharid='$adharid', pass='$pass',  profilepic='$file' WHERE id='$id'");
                  
				                             header("location:profile.php");
				  
                                              }
				                 else{
					                  echo "<h3>There is no id</h3>";
				                     }
                            }
				            else{
					            echo "<h3>email is not valid</h3>";
				            }
                        }
             else{
                   echo "<h3>password not match</h3>";
			 }			 

}
    else{
		echo "<h3>max length for some field has been exceed</h3>";
	}
}
else{
	echo "<h3>Please Fill All Field</h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta chareset="UTF-8">
<link rel="stylesheet" href="css/update.css"/>
<title>Update</title>
</head>
<body>
<div class="container col-lg-12">                
<!--SignUp Form-->
<div class="col-lg-4 col-lg-offset-4">
<h3 id="description">Update</h3>

<form name="signup" id="signup" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<div class="form-group"> 
<label for="name">Name</label>
<input type="text" name="name" id="name" value="<?php if(isset($row)){ echo $row['name']; }?>" class="form-control" placeholder="fullname">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" id="email" value="<?php if(isset($row)){ echo $row['email']; }?>" class="form-control" placeholder="email">
</div>
<div class="form-group">
<label for="adharid">Adharid</label>
<input type="adharid" name="adharid" id="adharid" value="<?php if(isset($row)){ echo $row['adharid']; }?>" class="form-control" placeholder="adhariid">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" name="pass" id="pass" value="<?php if(isset($row)){ echo $row['pass']; }?> "class="form-control" placeholder="password">
</div>
<div class="form-group">
<label for="pass">Profilepic</label>
<input type="file" name="files" id="file" value="<?php if(isset($row)){ echo "<img src='image1/".$row['profilepic']."'>"; }?>" class="form-control" placeholder="files">
</div>
<div class="form-group">
<button name="submit" id="submit" onclick="alert('Your information updated');" class="btn btn-primary btn-block">Update</button>
</div>
</form>
</div>
</div>
</div>
</body>
</html>