<?php 
session_start();
require_once("../db/config.php"); 

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Create a new PDO instance
    $pdo = new PDO($pg_connect, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $identifier = isset($_POST['identifier']) ? $_POST['identifier'] : '';

        // Determine if the identifier is an email or phone number
        if (!empty($identifier)) {
            if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
                // Identifier is an email
                $sql = 'SELECT * FROM signup WHERE email = :identifier';
            } else {
                // Identifier is a phone number
                $sql = 'SELECT * FROM signup WHERE phone = :identifier';
            }

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':identifier', $identifier);
            $stmt->execute();
            $user = $stmt->fetch();

            if ($user) {
                // Generate a unique reset token
                $reset_token = bin2hex(random_bytes(16));
                $expires_at = date('Y-m-d H:i:s', strtotime('+1 hour'));

                // Store the reset token and expiration in the database
                $sql = 'INSERT INTO password_resets (user_id, reset_token, expires_at) VALUES (:user_id, :reset_token, :expires_at)';
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':user_id' => $user['id'],
                    ':reset_token' => $reset_token,
                    ':expires_at' => $expires_at
                ]);

                // Send the reset token to the user's email or phone
                if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
                    // Send email (implement your email sending logic here)
                    mail($identifier, 'Password Reset', "Your reset token is: $reset_token");
                } else {
                    // Send SMS (implement your SMS sending logic here)
                }

                $_SESSION['success_message'] = "A reset token has been sent to your email/phone.";
                header('Location: reset_password.php');
                exit();
            } else {
                $_SESSION['error_message'] = "No account found with that email/phone.";
                header('Location: reset_request.php');
                exit();
            }
        } else {
            $_SESSION['error_message'] = "Please provide an email or phone number.";
            header('Location: reset_request.php');
            exit();
        }
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
