<?php

$servername = "studmysql01.fhict.local";
$username = "dbi380316";
$password = "LP2699";
$database = "dbi380316";

// Create connection
$conn = new mysqli($servername,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>