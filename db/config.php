<?php
// Database connection parameters
$host = 'c3nv2ev86aje4j.cluster-czrs8kj4isg7.us-east-1.rds.amazonaws.com';   // e.g., 'localhost' or '127.0.0.1'
$port = '5432';          // default PostgreSQL port is 5432
$dbname = 'd72fknmleq0oq4';    // name of your database
$user = 'usof740a83k29';      // database username
$password = 'p6d372150f295f6b0f0377aeb7b9a628368a55f10aaa07c3d116484a05b0e20b8';  // database password 

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
