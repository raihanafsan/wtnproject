<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$fname     = trim($_POST['fname']?? '' );
$lname     = trim($_POST['lname'] ?? '');
$email     = trim($_POST['email'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$password  = $_POST['pass'] ?? '';
$confirm   = $_POST['confirm'] ?? '';


if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($password) || empty($confirm)) {
    echo " Please fill out all required fields.";
    exit;
}

if (empty($_POST['email'])) {
    $errors[] = "Email is required.";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (!preg_match('/^[0-9]{10,15}$/', $phone)) {
    echo " Invalid phone number. Only digits allowed (10–15 characters).";
    exit;
}


if ($password !== $confirm) {
    echo " Passwords do not match.";
    exit;
}


$safeFname = htmlspecialchars($fname);
$safeLname = htmlspecialchars($lname);

echo " Registration successful!<br>";
echo "Welcome, <strong>$safeFname $safeLname</strong>.";
// Database connection
$host = "localhost";
$user = "Mehedi";
$pass = "Mehedi123"; // password (if any)
$dbname = "database";
 
// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Get form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender']?? '';
$city = $_POST['city'];
$address = $_POST['address'];
$usertype = $_POST['user_type'];
 
// Insert into database
if (!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($city) && !empty($address) && !empty($usertype)) {
 
    // Optional: Use prepared statements for security
    $stmt = $conn->prepare("INSERT INTO datatable (First_Name, Last_Name, Email, Gender, City, Address, UserType) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fname, $lname, $email, $gender, $city, $address, $usertype);
 
    if ($stmt->execute()) {
        echo "Order submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
 
    $stmt->close();
 
} else {
    echo "Error: All fields must be filled!";
}
 
$conn->close();
 
?>
 
 
?>
