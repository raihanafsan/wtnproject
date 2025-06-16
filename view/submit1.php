<?php

$errors = [];

if (empty($_POST['lname']) || strlen(trim($_POST['lname'])) < 2) {
    $errors[] = "Last name must be at least 2 characters long.";
}
if (empty($_POST['pass']) || strlen(trim($_POST['pass'])) < 6
        ||!preg_match('/[A-Za-z]/', $_POST['pass']) 
        || !preg_match('/[0-9]/', $_POST['pass'])) {
    $errors[] = "Password must be at least 6 characters long and contain number and letter.";
}

if (empty($_POST['address']) || !preg_match('/[A-Za-z]/', $_POST['address']) || !preg_match('/[0-9]/', $_POST['address'])) {
    $errors[] = "Address must contain both letters and numbers.";
}

if (empty($_POST['city'])) {
    $errors[] = "Please select a city.";
}

//if (empty($_POST['property']) || count($_POST['property']) == 0) {
   // $errors[] = "Please select at least 1 preferred property type.";
//}


if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9]{4,12}$/', $_POST['username'])) {
    $errors[] = "Username must be alphanumeric and 4–12 characters long.";
}


if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}


if (empty($_POST['phone']) || !preg_match('/^\d{10,15}$/', $_POST['phone'])) {
    $errors[] = "Please enter a valid phone number (10–15 digits).";
}


if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
} else {
    echo "<h2 style='color:green;'>All validations passed. Registration successssful!</h2>";
   
}


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$passw = $_POST['pass'];
$password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$gender = $_POST['gender']?? '';
$city = $_POST['city'];
$address = $_POST['address'];
$usertype = $_POST['user_type'];
$phone =$_POST['phone'];
$property= $_POST['property'];

$host = "localhost";
$user = "Afsan";
$pass = "Afsan123"; 
$dbname = "buyerdata";


$conn = new mysqli($host, $user, $pass, $dbname);

if (!empty($fname)
 && !empty($lname) && strlen(trim($_POST['lname'])) > 2
 && !empty($email) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
 && !empty($gender)
 && !empty($city)
 && !empty($property) 
 && !empty($address) && preg_match('/[A-Za-z]/', $_POST['address']) && preg_match('/[0-9]/', $_POST['address'])
 && !empty($usertype)
 && !empty($phone) && preg_match('/^\d{10,15}$/', $_POST['phone'])
 && !empty($username) && preg_match('/^[a-zA-Z0-9]{4,12}$/', $_POST['username'])
 && !empty($password) && strlen(trim($_POST['pass'])) > 6
  && preg_match('/[A-Za-z]/', $_POST['pass'])
  && preg_match('/[0-9]/', $_POST['pass'])) {

    
    $stmt = $conn->prepare("INSERT INTO users (First_Name, Last_Name, Property, Email, Phone, Username, Pass, Password, Gender, City, Address, UserType) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $fname, $lname, $property, $email, $phone, $username, $passw, $password, $gender, $city, $address, $usertype);

    if ($stmt->execute()) {
        echo "User submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

} else {
    echo "Error: All fields must be filled!";
}

?>
