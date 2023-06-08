<!DOCTYPE html>
<html lang="en">

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

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>

    <!-- CSS Sheet -->
    <link rel="stylesheet" href="styles/book.css">
    <title>Manage</title>
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
        <section class="booking-box" id="booking-box">
            <div class="input-container">
                <div class="search-flights-box tab-content" id="content1">
                    <div class="first-line">
                        <div class="input-locations input-from">
                            <svg class="plane-departure" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path
                                    d="M381 114.9L186.1 41.8c-16.7-6.2-35.2-5.3-51.1 2.7L89.1 67.4C78 73 77.2 88.5 87.6 95.2l146.9 94.5L136 240 77.8 214.1c-8.7-3.9-18.8-3.7-27.3 .6L18.3 230.8c-9.3 4.7-11.8 16.8-5 24.7l73.1 85.3c6.1 7.1 15 11.2 24.3 11.2H248.4c5 0 9.9-1.2 14.3-3.4L535.6 212.2c46.5-23.3 82.5-63.3 100.8-112C645.9 75 627.2 48 600.2 48H542.8c-20.2 0-40.2 4.8-58.2 14L381 114.9zM0 480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z" />
                            </svg>
                            <label>From</label>
                            <select name="airport" class="drop-down">
                                <option>Colombo</option>
                                <option>Dubai</option>
                                <option>Tokyo</option>
                                <option>Paris</option>
                            </select>
                        </div>

                        <div class="input-locations input-to">
                            <svg class="plane-arrival" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path
                                    d="M.3 166.9L0 68C0 57.7 9.5 50.1 19.5 52.3l35.6 7.9c10.6 2.3 19.2 9.9 23 20L96 128l127.3 37.6L181.8 20.4C178.9 10.2 186.6 0 197.2 0h40.1c11.6 0 22.2 6.2 27.9 16.3l109 193.8 107.2 31.7c15.9 4.7 30.8 12.5 43.7 22.8l34.4 27.6c24 19.2 18.1 57.3-10.7 68.2c-41.2 15.6-86.2 18.1-128.8 7L121.7 289.8c-11.1-2.9-21.2-8.7-29.3-16.9L9.5 189.4c-5.9-6-9.3-14-9.3-22.5zM32 448H608c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32zm96-80a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm128-16a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                            <label>To</label>
                            <select name="airport" class="drop-down">
                                <option>Colombo</option>
                                <option>Dubai</option>
                                <option>Tokyo</option>
                                <option>Paris</option>
                            </select>
                        </div>
                    </div>

                    <div class="second-line">
                        <div class="input-boxes trip-input">
                            <label>Trip</label>
                            <select class="drop-down">
                                <option>One Way</option>
                                <option>Return</option>
                            </select>
                        </div>

                        <div class="input-boxes departure-input">
                            <label>Departure</label>
                            <input type="date" />
                        </div>

                        <div class="input-boxes return-input">
                            <label>Return</label>
                            <input type="date" />
                        </div>

                        <div class="input-boxes passenger-input">
                            <label>Passengers</label>
                            <input type="number" />
                        </div>

                        <div class="input-boxes class-input">
                            <label>Class</label>
                            <select class="drop-down">
                                <option>Economy</option>
                                <option>Business</option>
                            </select>
                        </div>
                        <button class="flight-buttons flight-buttons-2">
                            Search Booking
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="book-description-box">
        <div class="book-description">
            <h3>How to Book your flights with NovaAir</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, hic tempore assumenda sit atque
                    dolores repellendus</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, hic tempore assumenda sit atque
                    dolores repellendus</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, hic tempore assumenda sit atque
                    dolores repellendus</li>
            </ul>
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