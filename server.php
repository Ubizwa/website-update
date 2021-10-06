<?php
$servername = "fdb30.awardspace.net";
$username ="3814912_users";
$password = "testusers123";
$database = "3814912_users";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
die("Connection failed. " . $conn->connect_error);
}


?>