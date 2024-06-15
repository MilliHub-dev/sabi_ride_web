<?php require_once("../db/config.php"); ?>
<?php
// Start the session
session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // If not, redirect to the login page
    header('Location: sabi_login.php');
    exit();
}

// Get user_id from session
$user_id = $_SESSION['id'];

// Include the rest of your script
$id = $_SESSION['id']; // Get user ID from session

// Fetch the verification status
$query = "SELECT verification_status FROM driver WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->execute([':id' => $id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$verification_status = $result ? $result['verification_status'] : 'Not Submitted';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabi Driver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/sabi_verification1.css">
</head>

<body>
    <main>
        <div class="col-sm-12 col-md-4 col-lg-12 bbox text-center">
            <span>Sabi <span>Driver</span></span>
        </div>
        <hr class="first-hr">
        <div class="progress">
            <span class="bar" id="bar1"></span>
            <span class="num" id="num-active">1</span>
            <span class="bar"></span>
            <span class="num" id="num-active">2</span>
            <span class="bar"></span>
            <span class="num" id="num-active">3</span>
            <span class="bar"></span>
            <span class="num" id="num-active">4</span>
            <span class="bar" id="last-bar"></span>
        </div>
        <?php

        if (!isset($_SESSION['email'])) {
            header("Location: sabi_login.php");
            exit();
        }

        $verification_status = $_SESSION['verification_status'] ?? 'pending';
        ?>
        <p>Your Documents are under review...</p>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-7 col-xl-7 txt">
            <p> Thanks for your Registration! Your submission has been received.</p>
            <p style="padding-left: 20px;"> Once your documents has been verified, you’ll receive an</p>
            <p>invitation by email for the location of your vehicle inspection.</p>
            <center>
                <h2>Your verification status is:<?php echo htmlspecialchars($verification_status); ?></h2>
            </center>
        </div>

        <div>
            <img src="../img/sabiDrive_imagepng.png" class="img-fluid">

        </div>
        <a href="../index.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Done</a>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
