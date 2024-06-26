<?php require_once("../db/config.php"); ?>


<?php
// Start the session
session_start();

// Function to get data from session or POST
function getSessionOrPost($key) {
    return $_POST[$key] ?? $_SESSION[$key] ?? null;
}
 
$user_id = $_SESSION['id']; // Assuming user_id is stored in session after login

// Check if the user has already submitted for verification
$query = "SELECT verification_status FROM driver WHERE id = :user_id";
$stmt = $pdo->prepare($query);
$stmt->execute([':user_id' => $user_id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    // Redirect to verification status page if already submitted
    header("Location: sabi_verification.php");
    exit();
}
  
// Collect data from previous forms
$first_name = $_SESSION['first_name'] = getSessionOrPost('first_name');
$middle_name = $_SESSION['middle_name'] = getSessionOrPost('middle_name');
$last_name = $_SESSION['last_name'] = getSessionOrPost('last_name');
$gender = $_SESSION['gender'] = getSessionOrPost('gender');
$referral_code = $_SESSION['referral_code'] = getSessionOrPost('referral_code');
$driver_type = $_SESSION['driver_type'] = getSessionOrPost('driver_type');
$driver_license_number = $_SESSION['driver_license_number'] = getSessionOrPost('driver_license_number');
$driver_license_expiry = $_SESSION['driver_license_expiry'] = getSessionOrPost('driver_license_expiry');
$vehicle_manufacturer = $_SESSION['vehicle_manufacturer'] = getSessionOrPost('vehicle_manufacturer');
$vehicle_model = $_SESSION['vehicle_model'] = getSessionOrPost('vehicle_model');
$vehicle_year = $_SESSION['vehicle_year'] = getSessionOrPost('vehicle_year');
$vehicle_color = $_SESSION['vehicle_color'] = getSessionOrPost('vehicle_color');

// Debug output
//echo "<pre>";
//print_r($_POST);
//print_r($_SESSION);
//echo "</pre>";

// Ensure all required fields are set
$required_fields = [
    'first_name', 'middle_name', 'last_name', 'gender', 'referral_code', 'driver_type', 
    'driver_license_number', 'driver_license_expiry', 'vehicle_manufacturer', 'vehicle_model', 
    'vehicle_year', 'vehicle_color'
];

foreach ($required_fields as $field) {
    if (!getSessionOrPost($field)) {
        die("Error: Missing value for $field");
    }
}

// Acceptable file types and maximum file size (10MB)
$max_file_size = 10 * 1024 * 1024; // 10MB
$acceptable_file_types = ['image/jpeg', 'image/png', 'application/pdf'];

// Collect the file information
$files = [
    'profile_photo' => $_FILES['profile_photo'],
    'car_photo_inner' => $_FILES['car_photo_inner'],
    'car_photo_outter' => $_FILES['car_photo_outter'],
    'driver_license_document' => $_FILES['driver_license_document'],
    'vehicle_license_certification' => $_FILES['vehicle_license_certification'],
    'certification_of_roadworthiness' => $_FILES['certification_of_roadworthiness'],
    'issued_id' => $_FILES['issued_id'],
    'proof_of_ownership' => $_FILES['proof_of_ownership'],
    'screenshot_of_dashboard' => $_FILES['screenshot_of_dashboard'],
    'screenshot_of_rating' => $_FILES['screenshot_of_rating'],
    'screenshot_of_notification' => $_FILES['screenshot_of_notification']
    
];

$uploadDir = 'uploads/';
$file_paths = [];

// Ensure the uploads directory exists and is writable
if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true)) {
    die("Failed to create upload directory: $uploadDir");
}
if (!is_writable($uploadDir)) {
    die("Upload directory is not writable: $uploadDir");
}

foreach ($files as $key => $file) {
    if ($file['size'] > $max_file_size) {
        die("File too large for $key. Maximum file size is 10MB.");
    }
    if (!in_array($file['type'], $acceptable_file_types)) {
        die("Invalid file type for $key. Only JPEG, PNG, and PDF files are allowed.");
    }
    $uploadFile = $uploadDir . basename($file['name']);
    if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
        $file_paths[$key] = $uploadFile;
    } else {
        die("File upload failed for $key!");
    }
}

// Insert the form data into the PostgreSQL database
$query = "INSERT INTO driver (
    first_name, user_id, middle_name, last_name, gender, referral_code, driver_type, driver_license_number, driver_license_expiry,
    vehicle_manufacturer, vehicle_model, vehicle_year, vehicle_color, profile_photo, car_photo_inner, car_photo_outter,
    driver_license_document, vehicle_license_certification, certification_of_roadworthiness, issued_id, proof_of_ownership,
     screenshot_of_dashboard, screenshot_of_rating, screenshot_of_notification
) VALUES (
    :first_name, :user_id, :middle_name, :last_name, :gender, :referral_code, :driver_type, :driver_license_number, :driver_license_expiry,
    :vehicle_manufacturer, :vehicle_model, :vehicle_year, :vehicle_color, :profile_photo, :car_photo_inner, :car_photo_outter,
    :driver_license_document, :vehicle_license_certification, :certification_of_roadworthiness, :issued_id, :proof_of_ownership,
    :screenshot_of_dashboard, :screenshot_of_rating, :screenshot_of_notification 
)";

$stmt = $pdo->prepare($query);

$params = [
    ':first_name' => $first_name, 
    ':user_id' => $user_id,
    ':middle_name' => $middle_name, 
    ':last_name' => $last_name, 
    ':gender' => $gender, 
    ':referral_code' => $referral_code, 
    ':driver_type' => $driver_type, 
    ':driver_license_number' => $driver_license_number, 
    ':driver_license_expiry' => $driver_license_expiry,
    ':vehicle_manufacturer' => $vehicle_manufacturer, 
    ':vehicle_model' => $vehicle_model, 
    ':vehicle_year' => $vehicle_year, 
    ':vehicle_color' => $vehicle_color, 
    ':profile_photo' => $file_paths['profile_photo'], 
    ':car_photo_inner' => $file_paths['car_photo_inner'],
    ':car_photo_outter' => $file_paths['car_photo_outter'], 
    ':driver_license_document' => $file_paths['driver_license_document'], 
    ':vehicle_license_certification' => $file_paths['vehicle_license_certification'],
    ':certification_of_roadworthiness' => $file_paths['certification_of_roadworthiness'], 
    ':issued_id' => $file_paths['issued_id'], 
    ':proof_of_ownership' => $file_paths['proof_of_ownership'],
    ':screenshot_of_dashboard' => $file_paths['screenshot_of_dashboard'],
    ':screenshot_of_rating' => $file_paths['screenshot_of_rating'],
    ':screenshot_of_notification' => $file_paths['screenshot_of_notification']
];

if ($stmt->execute($params)) {
    // Redirect to verification status page
    header("Location: sabi_verification4.php");
    exit();
} else {
    echo "Error: " . implode(" ", $stmt->errorInfo());
}

// Close the connection
$pdo = null;
?>

