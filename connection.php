<?php
    $conn = new mysqli("localhost", "root", "", "climate_change");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $db = $conn->query('SELECT * FROM themes');
?>