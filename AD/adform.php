<?php
session_start();
?>
<html>
<head>
	<title>LIVESTAY SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="adpage.css">
</head>
<body>
	<div id="formhead">
				<h1>LiveStay.</h1>
				<p>BOOK YOUR STAY AT YOUR COMFORT AND BUDGET.</p>
	</div>
	<form action="advalidate.php" method="post">
		<center>
			<input type="text" name="ad_name"  placeholder="Enter the name of residence" required="text">
			<input type="Ph_no" name="ph_no" placeholder="Phone Number"  required="text">
			<input type="text" name="map_link" placeholder="Address Gmap Link" required="text">
			<input type="text" name="pics" placeholder="uploaded pics link"  required="text">
			<input type="text" name="id_proof" placeholder="upload identity proof pics link"  required="text">
			<input type="text" name="add" placeholder="Enter the address"  required="text">
			<button type="submit">Submit</button>
		</center>	
	</form>
</body>
</html>  
