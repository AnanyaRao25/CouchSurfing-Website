<?php
session_start();

$con= mysqli_connect('localhost','root','1234567');
mysqli_select_db($con, 'couch_surfing');
$name= $_POST['user'];
$pass= $_POST['pass'];

$s = "select * from admin where name='$name' && password='$pass'";

$result= mysqli_query($con, $s);

$num= mysqli_num_rows($result);
if($num==1) 
{
	header('location:admin_page.php');

}
else{
	header('location:adminindex.php');
}

?>