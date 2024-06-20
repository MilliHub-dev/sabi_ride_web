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
        $reset_token = isset($_POST['reset_token']) ? $_POST['reset_token'] : '';
        $new_password = isset($_POST['new_password']) ? $_POST['new_password'] : '';

        // Check if the reset token and new password are provided
        if (!empty($reset_token) && !empty($new_password)) {
            // Validate the reset token
            $sql = 'SELECT * FROM password_resets WHERE reset_token = :reset_token AND expires_at > NOW()';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':reset_token', $reset_token);
            $stmt->execute();
            $reset_request = $stmt->fetch();

            if ($reset_request) {
                // Hash the new password
                $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

                // Update the user's password in the database
                $sql = 'UPDATE signup SET password = :new_password WHERE id = :user_id';
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':new_password' => $hashed_password,
                    ':user_id' => $reset_request['user_id']
                ]);

                // Delete the reset token from the database
                $sql = 'DELETE FROM password_resets WHERE reset_token = :reset_token';
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':reset_token' => $reset_token]);

                $_SESSION['success_message'] = "Your password has been reset successfully.";
                header('Location: sabi_login.php');
                exit();
            } else {
                $_SESSION['error_message'] = "Invalid or expired reset token.";
                header('Location: reset_password.php');
                exit();
            }
        } else {
            $_SESSION['error_message'] = "Please provide the reset token and a new password.";
            header('Location: reset_password.php');
            exit();
        }
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>