<?php
// Database connection parameters
$host = 'localhost';          // e.g., 'localhost' or '127.0.0.1'
$port = '5432';          // default PostgreSQL port is 5432
$dbname = 'sabi_ride';    // name of your database
$user = 'postgres';      // database username
$password = '1234';  // database password 

try {
    // Create a new PDO instance
    $pg_connect = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($pg_connect, $user, $password);

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the PostgreSQL database successfully!";
} catch (PDOException $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
}
?>
