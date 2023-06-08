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
        <div class="topnav">
            <a href="index.html">Home</a>
            <a href="book.html">Book</a>
            <a href="manage.html">Manage</a>
            <a href="wherewefly.html">Where we fly</a>
            <a href="destinations.html">Best Destinations</a>
            <a href="contact.html">Contact Us</a>
            <a href="newlogin.html" style="margin-left: 75px; margin-right: 150px">Login | Sign up</a>
             
        </div>
          
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

        <form action="countactus">
            <div class="lable">
                <div class="lbl1">Your Name </div>

                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Second Name">
                <br><br>

                <div class="lbl1">E-mail & Phone</div>
                <input type="email" placeholder="John.wick@gmail.com">
                <input type="phone" placeholder="(07x xxx xxxx)"><br><br>

                <div class="lbl1">Booking Reference :</div>
                <input type="text" placeholder="(optional)"><br><br>

                <div class="lbl1">Your Message </div>
            </div>

            <div class="msg">
                <textarea rows="4" cols="96"></textarea>

                <!-- <input type="text" style="width: 84%;"> -->
            </div>

            <div class="btn1">
                <label for="myfile">Attach a file or document:</label>
                <input type="file" id="myfile" name="myfile"><br>

            </div>
            <button class="submit-buttons">Submit</button>
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