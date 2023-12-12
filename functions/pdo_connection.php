<?php
$dns = "mysql:host=localhost;dbname=mysqlSabiRide";
$userName = "root";
$password = "";

try {
  // FOR ERROR HANDLING
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);

  // PHP DATA OBJECTS CONNECTION
  $pdo = new PDO($dns, $userName, $password, $options);

  // $user->first_name
  // $user['first_name']

  // set the PDO error mode to exception
  // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $pdo;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}