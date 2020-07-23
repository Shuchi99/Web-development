<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="registration";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed ". $conn->connect_error);
}

$sql="SELECT cid, firstname,lastname,email,danceform FROM choreographers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["cid"] .
		"  Name: " . $row["firstname"]." "
		. $row["lastname"]. 
		"  email: " . $row["email"] . 
		"   Dance Style: " . $row["danceform"] . "<br>";
	}
}
else {
	echo "0 results";
}

$conn->close();
?>