<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="registration";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed ". $conn->connect_error);
}

$sql="CREATE TABLE choreographers (
cid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
danceform VARCHAR(50))";

if ($conn->query($sql) === TRUE) {
	echo "Table choreographers created succesfully";
}
else {
	echo "Error Creating Table : " . $conn->error;
}
$conn->close();
?>