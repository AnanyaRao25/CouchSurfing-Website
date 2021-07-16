<?php
session_start();

$con= mysqli_connect('localhost','root','1234567');
mysqli_select_db($con, 'couch_surfing');
$mail= $_POST['mail'];
$pass= $_POST['pass'];

$s = "select * from user where email='$mail' && pass='$pass'";

$result= mysqli_query($con, $s);

$num= mysqli_num_rows($result);
if($num==1) 
{
	header('location:homepage.html');

}
else{
	echo '<script>alert("Wrong Crendentials")</script>';
	
}

?>