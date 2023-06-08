<?php include "./db/db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Flight</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="styles/myflight.css">
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
       
        <div class="myflight-description-box">
            <div class="myflight-description">
                <h3>My Flight</h3>

            <?php 

                if(isset($_POST["submit"])){

                    $FlightNo = $_POST["FlightNo"];
                    $class = $_POST["class"];
                    $passengers = $_POST["passengers"];

                    $qur = "SELECT r.DepartureAirport, r.ArrivalAirport, p.Price, p.FlightNo, p.DepartureDate, p.DepartureTime
                            FROM flight_routes r, passenger_flight p
                            WHERE r.RouteNo = p.RouteNo AND p.FlightNo = '{$FlightNo}' ;";
                    
                    $result = $conn->query($qur);

                    if($result -> num_rows > 0){

                        while($row = $result -> fetch_assoc()){


                   
                ?>

                <form action="" method="post">
                <table>
                    <tr>
                        <td>Flight ID</td>
                        <td><?php echo $FlightNo; ?></td>
                    </tr>
                    <tr>
                        <td>From</td>
                        <td><?php echo $row["DepartureAirport"]; ?></td>
                    </tr>

                    <tr>
                        <td>To</td>
                        <td><?php echo $row["ArrivalAirport"]; ?></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><?php echo $row["DepartureDate"]; ?></td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td><?php echo $row["DepartureTime"]; ?></td>
                    </tr>       
                    <tr>
                        <td>Passengers</td>
                        <td><?php echo $passengers; ?></td>
                    </tr>   
                    <tr>
                        <td>Class</td>
                        <td><?php echo $class; ?></td>
                    </tr>                
                </table>
                </form>

                <?php     }
                    } } ?>

                <!-- <ul>
                    <li>Flight ID: AK1037</li>
                    <li>From: Colombo Bandaranayake International Airport</li>
                    <li>To: Dubai International Airport</li>
                    <li>Date: 01/07/2023</li>
                    <li>Time: 00:30</li>
                    <li>Passengers: 2</li>
                    <li>Class: Economy</li>
                </ul> -->
                <div class="both-buttons">
                    <button class="flight-buttons">Edit Booking</button>
                    <button class="flight-buttons">Cancel Booking</button>
                    <button type="submit" name="confirm">Confirm</button>
                </div>

            </div>
        </div>
    </div>


    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Nova Airways</h3>

            <p class="footer-links">
                <a href="index.html">Home</a>
                <a href="book.html">Book</a>
                <a href="manage.html">Manage</a>
                <a href="#">Where we fly</a>
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

<?php $conn -> close() ?>