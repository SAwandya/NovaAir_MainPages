<?php

include "./db/db.php";

$fnameErr = $mnameErr = $lnameErr = $passwordErr = $cpasswordErr = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

    if(isset($_POST['submit'])){

        $name1 = test_input($_POST["firstname"]);
        
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name1)) {
            $fnameErr = "Only letters and white space allowed";
        }
  
        $name2 = test_input($_POST["middlename"]);
            
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name2)) {
          $mnameErr = "Only letters and white space allowed";
        }
        
        $name3 = test_input($_POST["lastname"]);
            
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name3)) {
          $lnameErr = "Only letters and white space allowed";
        }

        $password = $_POST["password"];

        if (strlen($password) < 8) {
            // Password is too short
            $passwordErr = "Password should be at least 8 characters long.";
        } elseif (!preg_match("/[a-z]/", $password)) {
            // Password should contain at least one lowercase letter
            $passwordErr = "Password should contain at least one lowercase letter.";
        } elseif (!preg_match("/[A-Z]/", $password)) {
            // Password should contain at least one uppercase letter
            $passwordErr = "Password should contain at least one uppercase letter.";
        } elseif (!preg_match("/[0-9]/", $password)) {
            // Password should contain at least one digit
            $passwordErr = "Password should contain at least one digit.";
        } 

        if (empty($_POST["pconfirm"])) {
            $cpasswordErr = "confirm password is required";
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "phone number is required";
        }

        $c_password = $_POST["pconfirm"];

        if(!$c_password === $password){
            $cpasswordErr = "confirm password is incorrect..";
        }
        
        
        }

        if($fnameErr == "" && $mnameErr == "" &&  $lnameErr == "" && $passwordErr == "" && $cpasswordErr == "" ){

            $firstname = $_POST["firstname"];
            $middlename = $_POST["middlename"];
            $lastname = $_POST["lastname"];
            $address = $_POST["address"];
            $dateofbirth = $_POST["dateofbirth"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            
            $qur1 = "INSERT INTO users (FirstName, MiddleName, SurName, UserAddress, DateOfBirth, UserPassword) 
                     VALUES ('$firstname', '$middlename', '$lastname', '$address', '$dateofbirth', '$password');";

            if($conn -> query($qur1) === TRUE){

              $lastID = $conn->insert_id;

              $qur2 = "INSERT INTO user_email VALUES ('$lastID' ,'$email');".
                      "INSERT INTO user_phone VALUES ('$lastID', '$phone');";
              
              if($conn->multi_query($qur2)){
                $success = "You are successfully registered..";
                header("Location: ./newlogin.php");
              }else{
                $message = "Registration failed.." . $conn->error;
              }

                
            }else{
                $message = "Registration failed.." . $conn->error;
            }

            

        }
        
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <!-- CSS Sheet -->
    <link rel="stylesheet" href="styles/registration.css">
    <title>Registration Form</title>
</head>

<body>

    <nav>
        <div class="top-logo">
            <img src="images/logo_with_txt.png" height="66px" style="margin-top: 20px; margin-left: 10px" />
        </div>
       <!------------------ Navigation bar --------------------->

       <?php include "./components/navbar.php" ?>
          
    </nav>

    <div class="main-container">

        <h1>Registration Form</h1>

    </div>

    <div class="card1">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

            <div class="content">
            <!-- <label for="title">Title:</label> -->
            <select name="title" id="title" required>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Miss">Miss</option>
                <option value="Ms.">Ms.</option>
            </select>
            
            <!-- <label for="first-name">First Name:</label> -->
            <input type="text" style="margin-left: 10px;" placeholder="First Name" name="firstname" id="first-name" required>
            <span><?php echo $fnameErr;?></span>
            <span><?php echo $mnameErr;?></span>
            <span><?php echo $lnameErr;?></span>

            <input type="text" style="margin-left: 15px;" placeholder="Middle Name" name="middlename" id="middle-name" required>
            

            <!-- <label for="last-name">Last Name:</label> -->
            <input type="text" style="margin-left: 15px;" placeholder="Last Name" name="lastname" id="last-name" required>
            <br>
            

            <input type="text" style="width: 30%;" placeholder="Address" name="address" id="address" required>
            

            <!-- <label for="dob">Date of Birth:</label> -->
            <input type="date" style="width: 30%;"  placeholder="Date of Birth" name="dateofbirth" id="dob" required>
            <br>
            

            <!-- <label for="email">Email:</label> -->
            <input type="email" style="width: 30%;" placeholder="Email" name="email" id="email" required>
            

            <!-- <label for="number">Number:</label> -->
            <input type="number" style="width: 30%;" placeholder="Phone Number" name="phone" id="number" required>
            <br>
            

            <!-- <label for="password">Password:</label> -->
            <input type="password" style="width: 30%;" placeholder="Password" name="password" id="password" required>
            
            <!-- <label for="repassword">Re-enter Password:</label> -->
            <input type="password" style="width: 30%;" placeholder="Re-enter Password" name="pconfirm" id="repassword" required>
            <br>
            <span><?php echo $passwordErr;?></span>
            <span><?php echo $cpasswordErr;?></span>
            <br>

            <span><?php echo $message;?></span>

            <label>
                <input type="checkbox" style="width: 30px; margin-top: 25px;" name="conditions" required>
                By Joining, I accept the NovaAir Airwars Privacy Policy and Terms and Conditions
            </label>
            <br>
            <input type="submit" name="submit" id="submit-button" value="Create an Account">
        </div>
        </form>
    </div>
    <footer class="footer-distributed">

        <div class="footer-left">
    
          <h3>Nova Airways</h3>
    
          <p class="footer-links">
            <a href="index.html">Home</a>
            <a href="book.html">Book</a>
            <a href="manage.html">Manage</a>
            <a href="wherewefly.html">Where we fly</a>
            <a href="destinations.html">Best Destinations</a>
            <a href="contact.html">Contact Us</a>
          </p>
    
          <p class="footer-company-name">Nova Airways © 2023</p>
        </div>
    
        <div class="footer-center">
    
          <div>
            <i class="fa fa-map-marker"></i>
            <p>Katunayake, Sri Lanka</p>
          </div>
    
          <div>
            <i class="fa fa-phone"></i>
            <p>+94 11 223 3118</p>
          </div>
          
    
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:novaairways@company.com">novaairways@company.com</a></p>
          </div>
        </div>
    
        <div class="footer-right">
          <p class="footer-company-about">
            <span>About the company</span>
            Soaring to new heights, we offer exceptional service, unmatched comfort, and seamless travel experiences. Fly with us today!
          </p>
          <div>
            <i class="social-icon fab fa-facebook-f"></i>
            <i class="social-icon fab fa-twitter"></i>
            <i class="social-icon fab fa-instagram"></i>
            <i class="social-icon fas fa-envelope"></i>
          </div>
        </div>
      </footer>
</body>

</html>

<?php $conn->close() ?>