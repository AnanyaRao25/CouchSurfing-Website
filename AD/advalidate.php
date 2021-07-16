<?php
session_start();

$con= mysqli_connect('localhost','root','1234567');
mysqli_select_db($con,'couch_surfing');

$adname= $_POST['ad_name'];
$phno= $_POST['ph_no'];
$gmap= $_POST['map_link'];
$pic=$_POST['pics'];
$adc=$_POST['id_proof'];
$address=$_POST['add'];

$s = "select * from ad where gmap='$gmap'";

$result= mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num==1)
{
	echo "Location Already exists";
}
else{
	$reg="insert into ad(adname, phno, gmap, pic, adc, address) values ('$adname','$phno','$gmap','$pic','$adc','$address')";
	mysqli_query($con,$reg);
	echo '<script>alert("Added")</script>';
}

?>