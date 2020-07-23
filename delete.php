
<?php require('server.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$userid=$_SESSION['username'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM users WHERE username= '$userid' ";
$sql1 = "DELETE FROM budget WHERE username= '$userid' ";

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
    echo "Record deleted successfully";
    
} else {
    echo "Error deleting record: " . $conn->error;   
}
$conn->close();
?>
