<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color:#000;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #16A5D2;
color: white;
height: 40px;
}
tr{
	height: 40px;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Username</th>
<th>Email</th>
<th>Phone number</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "1234567", "couch_surfing");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, email,ph FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["ph"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>