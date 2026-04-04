<?php
// config.php

$host = "sql309.infinityfree.com";
$user = "if0_41567379";
$password = "IFFxE5wDUP";
$dbname = "if0_41567379_db_storage";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>