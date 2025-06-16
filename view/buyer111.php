
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PropertyExpert Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/hh.css">
</head>
<body>
    <h1 id="logo">PropertyExpert.com</h1>
    <h2 class="ss1">Customer Information</h2>
    
    <form action="submit1.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname1" name="fname" value="">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" value=""><br>

        <label for="email">E-mail address</label>
        <input type="text" id="email1" name="email" value="">

        <label for="phone">Phone number</label>
        <input type="text" id="phone1" name="phone" value=""><br><br>

        <label for="address">Address</label><br>
        <input type="text" id="add1" name="address" value=""><br>

        <label for="city">Select City</label><br>
        <select name="city" id="city1">
            <option value="">--Select City--</option>
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
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>

        <h2 class="ss1">Account Information</h2>
        <label for="username">Username</label><br>
        <input type="text" id="fname2" name="username" value=""><br>

        <label for="pass">Password</label><br>
        <input type="password" id="pass1" name="pass"><br>

        <label for="confirm">Confirm Password</label><br>
        <input type="password" id="confirm1" name="pass"><br>

        <h2 class="ss1">Property Preferences</h2>
        <label>Preferred Property Type:</label><br>
        <input type="radio" name="property" value="House"> House<br>
<input type="radio" name="property" value="Apartment"> Apartment<br>
<input type="radio" name="property" value="Commercial"> Commercial Space<br>
<input type="radio" name="property" value="Land"> Land<br>


        <label for="pref_city">Preferred Location</label><br>
        <select name="pref_city" id="pref_city">
            <option value="">--Select Location--</option>
            
            <option value="Dhaka">Dhaka</option>
            
        </select><br><br>
         <input type="hidden" name="user_type" value="buyer">
  

        <label for="points">Preferred Budget Range:</label><br>
        <input type="range" id="points" name="points" min="10000" max="100000000"><br><br>

        <input type="checkbox" id="terms1" name="agree" value="yes">
        <label for="terms1">I agree to the terms and conditions of PropertyExpert.com</label><br><br>

        <input id="submit1" type="submit" name="reg" value="Register as Customer">
    </form>
</body>
</html>
