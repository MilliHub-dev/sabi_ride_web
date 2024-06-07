
<?php require_once("../db/config.php"); ?>

<?php
// Start the session
session_start();

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
        $password = isset($_POST['password']) ? $_POST['password'] : '';

         // Debugging: Check if the form data is retrieved correctly
         echo "Identifier: " . htmlspecialchars($identifier) . "<br>";
         echo "Password: " . htmlspecialchars($password) . "<br>";

         // Determine if the identifier is an email or phone number
         if (!empty($identifier) && !empty($password)) {
            // Determine if the identifier is an email or phone number
            if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
                // Identifier is an email
                $sql = 'SELECT * FROM signup WHERE email = :identifier';
            } else {
                // Identifier is a phone number
                $sql = 'SELECT * FROM signup WHERE phone = :identifier';
            }

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':identifier', $identifier);

            // Execute the statement
            $stmt->execute();

            // Fetch the user data
            $signup = $stmt->fetch();

            // Debugging: Output the user data
            echo "<pre>";
            print_r($signup);
            echo "</pre>";

            // Verify the password and check if user exists
            if ($signup && password_verify($password, $signup['password'])) {
                // Password is correct, start a session
                $_SESSION['user_id'] = $signup['id'];
                $_SESSION['email'] = $signup['email'];

           
                // Redirect to a protected page
                header('Location: profile.php');
                exit();
            } else {
                echo "Invalid email/phone or password!";
            }
        } else {
            echo "Please provide both identifier and password!";
        }
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

    