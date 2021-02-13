<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "medicine_management_system";

// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn1) {
   die("Connection Failed: " . mysqli_connect_error());
}
?>