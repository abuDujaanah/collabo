<?php
$dsn = 'mysql:host=localhost;dbname=admin_db';
$username = 'root';
$password = '';

try {
    // Create a new PDO instance
    $conn = new PDO($dsn, $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
