<?php
$host = 'localhost'; // Change if using a remote server
$dbname = 'school_db'; 
$username = 'root'; // Use your MySQL username
$password = 'tobs2007$1967'; // Enter your MySQL password

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
