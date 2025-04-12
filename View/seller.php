<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/seller2.css">
</head>
<body>
  <h1>Property Expert.Com</h1>
    <h2 class="sinformation">Seller Information</h2>
    <form>
        <label for="fname">First Name</label><br>
        <input type="text" id="fname1" name="fname" value=""><br>
        <label for="lname">Last Name</label><br>
        <input type="text" id="lname1" name="lname" value=""><br>
        <label for="email">E-mail address</label><br>
        <input type="text" id="email1" name="email" value=""><br>
        <label for="email">Business name</label><br>
        <input type="text" id="email1" name="email" value=""><br>
        <label for="phone">Phone number</label><br>
        <input type="text" id="phone1" name="phone" value=""><br>
        <label for="adress">Adress</label><br>
        <input type="text" id="add1" name="address" value=""><br><br>
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
          <p id="gender">Gender:</p>
          <input type="radio" id="html" name="fav_language" value="HTML">
          <label for="html">Male</label><br>
          <input type="radio" id="html" name="fav_language" value="HTML">
          <label for="html">Female</label><br>

          <h2 class="sinformation">Account Information</h2>
          <label for="fname">Username</label><br>
          <input type="text" id="fname1" name="fname" value=""><br>
          <label for="fname">Password</label><br>
          <input type="password" id="pass1" name="pass" value=""><br>
          <label for="fname">Confirm Password</label><br>
          <input type="password" id="confirm1" name="confirm" value=""><br>

          <h2 class="sinformation">Property Preferences</h2>
          <h4 class="p">Prefered Property Type:</h4>
          
          <input type="checkbox" id="house1" name="house" value="House">
          <label for="house"> House</label><br>
          <input type="checkbox" id="apartment1" name="apartment" value="apartment">
          <label for="apartment"> Apartment</label><br>
          <input type="checkbox" id="commercial1" name="commercial" value="commercial">
          <label for="commercial space"> Commerial Space</label><br>
          <input type="checkbox" id="land1" name="land" value="land">
          <label for="land">Land</label><br><br>
          <h4 class="p">Property Address</h4>

          <input type="text" id="fname1" name="fname" value=""><br><br>
          <h4 class="p">Property Location</h4>
          
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
    
          <h4 class="p">Description of property being displayed</h4>
          <input type="text" id="fname1" name="fname" value=""><br>
          <h4 class="p">Interested In:</h4>
          <input type="radio" id="html" name="fav_language" value="HTML">
          <label for="html">Buying</label><br>
          <input type="radio" id="html" name="fav_language" value="HTML">
          <label for="html">Renting</label><br><br>
          <input type="checkbox" id="house1" name="house" value="House">
          <label for="house">I agree to the terms and conditions of the propertyexpert.com</label><br><br>
          <input type="submit" value="Register as Seller">
    </form>
    <form action="customerreview.php"> <input type="submit" value="customer review"></form>
</body>
</html>
</body>
</html>