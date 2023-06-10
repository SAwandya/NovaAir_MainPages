<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>

    <!-- CSS  -->
    <link rel="stylesheet" href="styles/flights.css">

    <title>Flights</title>
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
        <h1>Choose a flight</h1>
        <p class="title-description">Outbound, Colombo Bandaranayake Airport to Dubai(18 Options) </p>
    </div>

    <?php 
            session_start();

            include "./db/db.php";
            if(isset($_POST["submit"])){

                $from_airport = $_POST["from_airport"];
                $to_airport = $_POST["to_airport"];
                $way = $_POST["way"];
                $d_date = $_POST["d_date"];
                $r_date = $_POST["r_date"];
                $passengers = $_POST["passengers"];
                $class = $_POST["class"];

                $qur = "SELECT r.DepartureAirport, r.ArrivalAirport, p.Price, p.FlightNo, p.DepartureTime, p.ArrivalTime
                        FROM flight_routes r, passenger_flight p
                        WHERE r.RouteNo = p.RouteNo AND r.DepartureAirport = '{$from_airport}' AND r.ArrivalAirport = '{$to_airport}' AND p.DepartureDate = '{$d_date}' AND p.ArrivalDate = '{$r_date}';";

                $result = $conn -> query($qur);

                if($result -> num_rows > 0){

                    while($row = $result -> fetch_assoc()){

                        $_SESSION['flightno'] = $row["FlightNo"];
                        $_SESSION['class'] = $class;
                        $_SESSION['passengers'] = $passengers;
                        $_SESSION['price'] = $row["Price"];   

            ?>

    <div>
        <div class="container">
            <div class="main-table-container">
                <div class="eco-container">
                    <span class="class-text">Economy Class</span>
                    <span class="from-text">From</span>
                    <span class="class-price">LKR <?php echo $row["Price"] ?></span>
                </div>
                <div class="business-container">
                    <span class="class-text">Business Class</span>
                    <span class="from-text">From</span>
                    <span class="class-price">LKR <?php echo $row["Price"] * 1.5 ?></span>
                    
                </div>
                <div class="main-flight-details">
                    <span class="flight-id">EN 1417</span>
                    <div class="container-flights-details"></div>
                    <span class="destination1"><?php echo $row["DepartureAirport"] ?></span>
                    <span class="destination1-time"><?php echo $row["DepartureTime"] ?></span>
                    <span class="destination2"><?php echo $row["ArrivalAirport"] ?></span>
                    <span class="destination2-time"><?php echo $row["ArrivalTime"] ?></span>
                    
                </div>
                
            </div>
    
        </div>
        <form action="./myflight.php" method="post">
          <button type="submit" name="submit" >choose</button>
        </form>
    </div>
    

    <?php 
                

            }
        }

    else echo "<h1> No Result </h1>";

    }
    $conn->close();

    ?>
    
    
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