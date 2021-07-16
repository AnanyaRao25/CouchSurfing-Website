<?php
session_start();
?>
<html>
<head>
	<title>LIVESTAY SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div id="signuphead">
				<h1>LiveStay.</h1>
				<p>BOOK YOUR STAY AT YOUR COMFORT AND BUDGET.</p>
	</div>
	<form action="user_signup.php" method="post">
		<center>
			<input type="text" name="User_name"  placeholder="ENTER FULL NAME" required="text">
			<input type="email" name="Email" placeholder="EMAIL"  required="text">
			<input type="tel" name="Ph_no" placeholder="ENTER PHONE NUMBER" required="text">
			<input type="password" name="Password" placeholder="SET PASSWORD"  required="text">
			<!--<input type="password" name="" placeholder="CONFIRM PASSWORD" required="text" >-->
			<button type="submit">SIGN IN</button>
		</center>	
	</form>
	<div id="login-text">
		ALREADY A MEMBER?
		<a href="login.html">Login instead.</a>
	</div>
</body>
</html>  
