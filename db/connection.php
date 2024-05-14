<?php
    $host = "localhost";
    $username = "bloodbank";
    $password = "Christian123k!";
    $database = "bloodbank_db";

    // Create DB Connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    //echo "Database Connected successfully";
?>