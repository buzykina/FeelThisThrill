<?php
$servername = "studmysql01.fhict.local";
$username = "dbi380316";
$password = "LP2699";

try {
    $conn = new PDO("mysql:host=$servername;dbname=dbi380316", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$_SESSION['LoggedIn']=false;





?>