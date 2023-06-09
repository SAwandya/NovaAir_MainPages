<?php include "./db/db.php" ?>

<?php 

$commentErr = $mnameErr = $fnameErr = $phoneErr = $Error = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['submit'])){
    
        if (empty($_POST["comment"])) {
            $commentErr = "Message is required";
        }
            
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } 
    
        if (empty($_POST["firstname"])) {
            $fnameErr = "First name is required";
            } else {
                $name = test_input($_POST["firstname"]);
    
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $fnameErr = "Only letters and white space allowed";
        }
        }
    
        if (empty($_POST["middlename"])) {
            $mnameErr = "Last name is required";
        } else {
            $name = test_input($_POST["middlename"]);
            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $mnameErr = "Only letters and white space allowed";
            }
        }
    
        if (empty($_POST["phone"])) {
            $phoneErr = "phone number is required";
        }
    
        if($commentErr == "" && $mnameErr == "" && $phoneErr == "" && $emailErr == "" && $fnameErr == ""){
    
            $comment = $_POST['comment'];
            $firstname = $_POST['firstname'];
            $middlename = $_POST['middlename'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $currentDate = date('Y-m-d');
    
            $qur = "INSERT INTO feedback (Comment, GivenDate, StaffID, FirstName, MiddleName, Email, PhoneNo)
                    VALUES ('$comment', '$currentDate', 2, '$firstname', '$middlename', '$email', '$phone');";
    
            $result = $conn->query($qur);
    
            if($result === TRUE){
                echo "You are successfully registered..";

                header("Location: ./index.php");
            }else{
                echo "Registration failed.." . $conn->error;
            }
        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>    

    <link rel="stylesheet" href="styles/contact.css">
    <title>Contact us</title>
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


        <h1>How Can We Help?</h1>
        <p class="title-description">
            Thank you for visiting our ticket reservation system! We appreciate your feedback and inquiries. 
            Our support team is available to assist you promptly. Contact us through the form or provided information. 
            We aim for positive interactions and are committed to helping with your travel needs. We look forward to hearing from you and assisting you!
         </p>
    </div>

    <div class="card1">

        <h2>Contact Us!</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <div class="lable">
                <div class="lbl1">Your Name </div>
                <input name="firstname" type="text" placeholder="First Name">
                

                <input name="middlename" type="text" placeholder="Second Name">
                <br><br><span>* <?php echo $mnameErr;?></span>

                <div class="lbl1">E-mail & Phone</div>
                <input name="email" type="email" placeholder="John.wick@gmail.com">
                <span>* <?php echo $emailErr;?></span>

                <input name="phone" type="phone" placeholder="(07x xxx xxxx)">
                <span>* <?php echo $phoneErr;?></span><br><br>

                <div  class="lbl1">Your Message </div>
                
            </div>
            
            <div class="msg">
                <textarea name="comment" rows="4" cols="96"></textarea>
                <span>* <?php echo $commentErr;?></span>
                <!-- <input type="text" style="width: 84%;"> -->
            </div>

            <span><?php echo $Error;?></span>

            <button name="submit" class="submit-buttons">Submit</button>
        </form>
    </div>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Nova Airways</h3>

            <p class="footer-links">
                <a href="index.html">Home</a>
                <a href="book.html">Book</a>
                <a href="manage.html">Manage</a>
                <a href="#">Where we fly</a>
                <a href="#">Best Destinations</a>
                <a href="#">Contact Us</a>
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
                Soaring to new heights, we offer exceptional service, unmatched comfort, and seamless travel
                experiences. Fly with us today!
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