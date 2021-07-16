<?php
session_start();

$con= mysqli_connect('localhost','root','1234567');
mysqli_select_db($con,'couch_surfing');

$name= $_POST['User_name'];
$email= $_POST['Email'];
$ph= $_POST['Ph_no'];
$pass=$_POST['Password'];

$s = "select * from user where email='$email'";

$result= mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num==1)
{
	echo "CHOOSE A DIFFERENT NAME";
}
else{
	$reg="insert into user(name , email, ph, pass) values ('$name','$email','$ph','$pass')";
	mysqli_query($con,$reg);
	header('location:homepage.html');
}

?>