<?php
    $servername = "localhost";
    $username = "root";
    $password = "nghia26102003";
    $database = "username_database";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } else {
    
    }
?>