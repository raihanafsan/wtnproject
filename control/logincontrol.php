<?php
session_start();
include '../model/database.php';


if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["pass1"];
    

    
    $result = login($conn,"users",$email);
    if($result->num_rows > 0){
        $data=$result->fetch_assoc();
        
        if(password_verify($password,$data["Password"])){
       $_SESSION["email"] = $email;
       
       header("Location: ../view/userprofile.php");
        }
        else{
            echo "wrong password";
            echo "Entered: $password <br>";
echo "Stored: " . $data["Password"] . "<br>";
        }
    }
    else{
        echo "user not found";
    }
}

?>