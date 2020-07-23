<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="registration";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed ". $conn->connect_error);
}

$sql = "INSERT INTO choreographers (firstname, lastname, email, danceform)
VALUES ('Medha', 'Tendulkar', 'Medha01@gmail.com','Hip-Hop');";
$sql .= "INSERT INTO choreographers (firstname, lastname, email, danceform)
VALUES ('Mary', 'Dwayne', 'mary@rediffmail.com','Rock');";
$sql .= "INSERT INTO choreographers (firstname, lastname, email, danceform)
VALUES ('Julie', 'More', 'julie@yahoo.com','Bollywood')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>