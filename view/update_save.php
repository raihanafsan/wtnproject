<?php
include '../model/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'], $_POST['name'], $_POST['email'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $fname =$_POST['fname'];
        $lname=$_POST['lname'];
        $passw=$_POST['pass'];
        $phone=$_POST['phone'];
        $id = $conn->real_escape_string($id);
        $fname = $conn->real_escape_string($fname);
        $lname = $conn->real_escape_string($lname);
        $name = $conn->real_escape_string($name);
        $email = $conn->real_escape_string($email);
        $passw = $conn->real_escape_string($passw);
        $phone = $conn->real_escape_string($phone);

        $sql = "UPDATE users SET First_Name = '$fname', Phone='$phone', Last_Name = '$lname', Username = '$name', Email = '$email', Pass ='$passw' WHERE ID = $id";
        $result = $conn->query($sql);

        if ($result) {
            echo " User updated successfully.<br>";
            echo "<a href='displaydata.php'>Back to user list</a>";
        } else {
            echo " Error updating user: " . $conn->error;
        }

        closeCon($conn);
    } else {
        echo "Missing data in POST.";
    }
} else {
    echo "Invalid request method.";
}
?>
