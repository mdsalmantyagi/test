<?php
$conn = mysqli_connect("localhost","root","","test");

$query = mysqli_query($conn,"DELETE*FROM user where email='sm326632@gmail.com'");


?>