<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/hh.css">
</head>
<body>
    <h1 id="logo">PropertyExpert.com</h1>
    <h2 class="ss1">Customer Information</h2>
    <form action="submit.php" method="get">
        <label for="fname">First Name</label>
        <input type="text" id="fname1" name="fname" value="">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="email">E-mail address</label>
        <input type="text" id="email1" name="email" value="">
        <label for="phone">Phone number</label>
        <input type="text" id="phone1" name="phone" value=""><br><br>
        <label for="adress">Adress</label><br>
        <input type="text" id="add1" name="address" value=""><br>
        <label for="city">Select City</label><br>
        <select name="city" id="city1">
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Mymenshing">Mymenshing</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Barishal">Barishal</option>
            <option value="Khulna">Khulna</option>
            <option value="Comilla">Comilla</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Jessore">Jessore</option>
            <option value="Gazipur">Gazipur</option>
            <option value="Narshingdi">Narshingdi</option>
          </select>
          <p>Gender:</p>
          <input type="radio" id="html12" name="male" value="male">
          <label for="html">Male</label><br>
          <input type="radio" id="html34" name="female" value="female">
          <label for="html">Female</label><br>

          <h2 class="ss1">Account Information</h2>
          <label for="fname2">Username</label><br>
          <input type="text" id="fname2" name="fname" value=""><br>
          <label for="pass">Password</label><br>
          <input type="password" id="pass1" name="pass" value=""><br>
          <label for="pass">Confirm Password</label><br>
          <input type="password" id="confirm1" name="confirm" value=""><br>

          <h2 class="ss1">Property Preferences</h2>
          <label for="house"> Prefered Property Type:</label><br><br>
          <input type="checkbox" id="house1" name="house" value="House">
          <label for="house"> House</label><br>
          <input type="checkbox" id="apartment1" name="apartment" value="apartment">
          <label for="apartment"> Apartment</label><br>
          <input type="checkbox" id="commercial1" name="commercial" value="commercial">
          <label for="commercial space"> Commerial Space</label><br>
          <input type="checkbox" id="land1" name="land" value="land">
          <label for="land">Land</label><br><br>

          <label for="city">Prefered Location</label><br><br>
        <select name="city" id="city1">
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Mymenshing">Mymenshing</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Barishal">Barishal</option>
            <option value="Khulna">Khulna</option>
            <option value="Comilla">Comilla</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Jessore">Jessore</option>
            <option value="Gazipur">Gazipur</option>
            <option value="Narshingdi">Narshingdi</option>
          </select><br><br>
          <label for="points">Prefered Budget Range (Between 10,000tk and 100,00,00,000tk):</label><br>
          <input type="range" id="points" name="points" min="10000" max="100000000"><br><br>
          
          <input type="checkbox" id="house1" name="house" value="House">
          <label for="house">I agree to the terms and conditions of the propertyexpert.com</label><br><br>
          <input id="submit" type="submit" value="Register as Customer">
          
          
    </form>
    <form action="aboutus.php">
    <div class= "aboutus">
          <input id="aboutus" type="submit" value="About us">
          </div>
    </form>
</body>
</html>