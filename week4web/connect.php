<?php
$servername = "localhost";
$user = "griflqre_griffin";
$pass = "griffin1";
$database = "griflqre_week4";

//create the connection
$conn = mysqli_connect($servername, $user, $pass, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
