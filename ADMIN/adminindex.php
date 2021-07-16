<?php
	session_start();
?>
<html>
<head>
	<title>ADMIN-LIVESTAY</title>
	<link rel="stylesheet" type="text/css" href="admin_index.css">
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
				<center>
					<div id="admin">
						<h2>ADMIN</h2>
						<form action="validate.php" method="post">
							<input type="text" name="user" placeholder="Enter User Id">
							<input type="password" name="pass" placeholder="Enter password">
							<button type="submit">LOGIN</button>
						</form>
					</div>
				</center>
			</aside>
</body>
</html>