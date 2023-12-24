<?php
    // Connect to the database
    $host_name = "localhost";
    $db_name = "marbel";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($host_name, $username, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>