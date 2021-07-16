<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="admin_page.css">
</head>
<body>
	<section>
	<div id="logo">
				<center>
				<img src="IMAGES/logo.png">
				<h1>LiveStay.</h1>
				<p>BOOK YOUR STAY AT YOUR COMFORT AND BUDGET.</p>
				</center>
			</div>
			</section>
			<aside>
				
					<div id="user_box">
						<form action="userlist.php"> 
						<button id="btn" onclick="">Admin Access to User List</button>
						</form>
					</div>
					<div id="ad_box">
						<form action="adlist.php">
						<button id="bttn">Admin Access to Advertise List</button>
						</form>
					</div>
				
					
			</aside>
</body>
</html>