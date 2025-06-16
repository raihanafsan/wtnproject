<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users List</title>
    <link rel="stylesheet" type="text/css" href="../css/data.css">
    
</head>
<body>

<div class="container">
    <h2>User Information</h2>

   <?php
include '../model/database.php';



$result = $conn->query("SELECT * FROM users");

if ($result->num_rows > 0) {
    echo "<table>
            <thead>
              <tr><th>ID</th><th>UserType</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>User Name</th><th>Password</th><th>Gender</th><th>PropertyType</th><th>City</th><th>Address</th><th>Actions</th></tr>
            </thead>
            <tbody>";
    
    while ($row = $result->fetch_assoc()) {
        $id = $row['ID'];
        $usertype = $row['UserType'];
        $fname = $row['First_Name'];
        $lname = $row['Last_Name'];
        $email = $row['Email'];
        $phone =$row['Phone'];
        $username = $row['Username'];
        $passw = $row['Pass'];
        $gender = $row['Gender'];
        $city = $row['City'];
        $address = $row['Address'];
        $property= $row['Property'];
        
      
        echo "<tr>
                <td>$id</td>
                <td>$usertype</td>
                <td>$fname</td>
                <td>$lname</td>
                <td>$email</td>
                <td>$phone</td>
                <td>$username</td>

                <td>$passw</td>
                <td>$gender</td>
               <td>$property</td>
                <td>$city</td>
                <td>$address</td>
                <td>
                  <a href='update.php?id=$id'>Edit</a> | 
                  <a href='delete.php?id=$id'>Delete</a>
                </td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No users found.";
}
?>

</div>

</body>
</html>
