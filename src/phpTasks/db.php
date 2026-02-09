<?php
$servername = "localhost";
$username = "wp_amk1012409";
$password = "JfoE7lkm";
$dbname = "wp_amk1012409";

//connection string
$conn = new mysqli($servername, $username, $password, $dbname);

// test connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>