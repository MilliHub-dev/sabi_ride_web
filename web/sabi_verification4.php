<?php require_once("../db/config.php"); ?>
<?php
// Start the session
session_start();

// Enable error reporting for debugging
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

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
    <link rel="stylesheet" href="../style/verification.css">
    <link rel="icon" type="image/x-icon" href="../sabimages/Sabiride3.png">
</head>

<body>
    <div class="container-fluid text-body">
        <div class="row justify-content-center">
            <div class="mt-5 brand-name  align-self-center text-center">
                <span id="sabi">Sabi </span><span>Driver</span>
            </div>
            <div class="  text-center align-self-center">
                <hr class="text-center center-block-elem">
            </div>
            <div class="mt-1"></div>
            <div class=" progressbar">
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

            <p class="fw-bold text-center">Your Documents are under review...</p>
            <div class="text-black-50 text-center">
                <p> Thanks for your Registration! Your submission has been received.
                    Once your documents has been verified, you’ll receive an
                    invitation by email for the location of your vehicle inspection.</p>
                <center>
                    <p class="emphasis">Your verification status is:<?php echo htmlspecialchars($verification_status); ?></p>
                </center>
            </div>

            <div class="text-center">
                <img src="../img/sabiDrive_imagepng.png" class="img-fluid w-50 d-block mx-auto"><img>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-sm-12 center-flex-elem mt-4">
                    <a href="../index.php" tabindex="-1" role="button" aria-disabled="true" class="btn">
                        <button type="submit" class=" icon-button"><span>Continue</span><i class='bx bx-right-arrow bx    bx-fade-right mt-1'></i> <a href="../index.php" tabindex="-1" role="button" aria-disabled="true"></button>
                        <button type="submit" class=" icon-button"><span>Logout</span><i class='bx bx-right-arrow bx    bx-fade-right mt-1'></i> <a href="logout.php" tabindex="-1" role="button" aria-disabled="true"></button>
                    </a>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
