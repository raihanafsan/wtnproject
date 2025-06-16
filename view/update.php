<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update User</title>
  <link rel="stylesheet" type="text/css" href="../css/data.css"> <!-- External CSS -->
</head>
<body>
  <?php
include '../model/database.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$row = $result->fetch_assoc();
?>

<form action="update_save.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
  First Name: <input type="text" name="fname" value="<?php echo $row['First_Name']; ?>"><br>
  Last Name: <input type="text" name="lname" value="<?php echo $row['Last_Name']; ?>"><br>
  Name: <input type="text" name="name" value="<?php echo $row['Username']; ?>"><br>
  Email: <input type="text" name="email" value="<?php echo $row['Email']; ?>"><br>
  Phone: <input type="text" name="phone" value="<?php echo $row['Phone']; ?>"><br>
  PassWord: <input type="text" name="pass" value="<?php echo $row['Pass']; ?>"><br>
  
  <input type="submit" value="Update User">
</form>
</body>
</html>