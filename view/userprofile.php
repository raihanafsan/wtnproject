<?php
session_start();

?>


<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PropertyExpert Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/user.css">
</head>

<body>
    <h1>User Profile</h1>
    <?php 
    if (isset($_SESSION["email"])) {
        echo htmlspecialchars($_SESSION["email"]);
    } else {
        echo "Guest";
    }
    ?>

    <a href="../control/logout.php">Logout</a>
</body>
</html>