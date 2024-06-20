
<?php require_once("../db/config.php"); ?>

<?php

try {
    // Create a new PDO instance
    $pdo = new PDO($pg_connect, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
       
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $location_city = $_POST['location_city'];
        $password = $_POST['password'];

        // Hash the password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement
        $sql = 'INSERT INTO signup (email, phone_number, location_city, password) VALUES (:email, :phone_number, :location_city, :password)';
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':location_city', $location_city);
        $stmt->bindParam(':password', $passwordHash);

        // Execute the statement
        if ($stmt->execute()) {
            header('Location: sabi_login.php');
            
            exit();
        } else {
            echo  "<script>alert('Signup failed!');</script>";
            header('Location: driver.php');
        }
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
