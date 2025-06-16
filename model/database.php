<?php

$host = "localhost";
$user = "Afsan";
$pass = "Afsan123"; 
$dbname = "buyerdata";


$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



function login($conn,$users,$email){
    $querystring="SELECT * FROM $users WHERE email = '$email'";
    $result=$conn->query($querystring);
    return $result;
}


 function closeCon($conn) {
        $conn->close();
    }




?>