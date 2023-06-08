<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>

  <!-- CSS Style Sheet -->
  <link rel="stylesheet" href="styles/style.css" />  

  <title>NovaAir Airways</title>
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
      <div class="btn-box">
        <button id="btn1" class="btn" onclick="openSearchFlights()">
          Search Flights
        </button>
        <button id="btn2" class="btn" onclick="openManageFlights()">
          Manage Booking
        </button>
      </div>

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
          </div>

          <button class="flight-buttons flight-buttons-1">
            Search Flights
          </button>
        </div>

        <div class="manage-booking-box tab-content" id="content2">
          <div class="second-line">
            <div class="input-boxes reference-input">
              <label>Booking Reference Number</label>
              <input type="number" />
            </div>

            <div class="input-boxes lastname-input">
              <label>Last Name</label>
              <input type="number" />
            </div>
          </div>

          <button class="flight-buttons flight-buttons-2">
            Search Booking
          </button>
        </div>
      </section>

      <section class="benefits-section">
        <h2>Your Benefits</h2>
        <div class="benefits-container">
          <div class="benefits">
            <div class="icon-container">
              <div class="icon-circle"></div>
              <svg
                class="feature-icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
              >
                <path
                  d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96v32V480H128V128 96zM64 96H96V480H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64zM448 480H416V96h32c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64z"
                />
              </svg>
            </div>
            <h3>Baggage Allowance</h3>
            <p>Generous baggage space for hassle-free travel</p>
          </div>
          <div class="benefits">
            <div class="icon-container">
              <div class="icon-circle"></div>
              <svg
                class="feature-icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
              >
                <path
                  d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM144 221.3c0-33.8 27.4-61.3 61.3-61.3c16.2 0 31.8 6.5 43.3 17.9l7.4 7.4 7.4-7.4c11.5-11.5 27.1-17.9 43.3-17.9c33.8 0 61.3 27.4 61.3 61.3c0 16.2-6.5 31.8-17.9 43.3l-82.7 82.7c-6.2 6.2-16.4 6.2-22.6 0l-82.7-82.7c-11.5-11.5-17.9-27.1-17.9-43.3z"
                />
              </svg>
            </div>
            <h3>Lie-flat Seats</h3>
            <p>Ultimate comfort with luxurious lie-flat seats</p>
          </div>
          <div class="benefits">
            <div class="icon-container">
              <div class="icon-circle"></div>
              <svg
                class="feature-icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <path
                  d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"
                />
              </svg>
            </div>
            <h3>Dining Facilities</h3>
            <p>Delightful culinary experience onboard</p>
          </div>
          <div class="benefits">
            <div class="icon-container">
              <div class="icon-circle"></div>
              <svg
                class="feature-icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512"
              >
                <path
                  d="M400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H24C10.7 64 0 74.7 0 88c0 92.6 33.5 157 78.5 200.7c44.3 43.1 98.3 64.8 138.1 75.8c23.4 6.5 39.4 26 39.4 45.6c0 20.9-17 37.9-37.9 37.9H192c-17.7 0-32 14.3-32 32s14.3 32 32 32H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H357.9C337 448 320 431 320 410.1c0-19.6 15.9-39.2 39.4-45.6c39.9-11 93.9-32.7 138.2-75.8C542.5 245 576 180.6 576 88c0-13.3-10.7-24-24-24H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zM48.9 112h84.4c9.1 90.1 29.2 150.3 51.9 190.6c-24.9-11-50.8-26.5-73.2-48.3c-32-31.1-58-76-63-142.3zM464.1 254.3c-22.4 21.8-48.3 37.3-73.2 48.3c22.7-40.3 42.8-100.5 51.9-190.6h84.4c-5.1 66.3-31.1 111.2-63 142.3z"
                />
              </svg>
            </div>
            <h3>Award Winning Service</h3>
            <p>Renowned for exceptional customer care</p>
          </div>
        </div>
      </section>

      <section class="destinations-section">
        <h2>Best Destinations to Travel</h2>
        <div class="destinations-boxes">
          <div
            class="destination"
            id="destination1"
            onmouseover="showDetails1()"
            onmouseout="hideDetails1()"
          >
            <h3 id="destination-heading1">Paris, France</h3>
            <p id="destination-para1">
              The City of Love, known for its iconic landmarks such as the
              Eiffel Tower and the Louvre museum, as well as its romantic
              atmosphere and world-renowned cuisine.
            </p>
            <a href="destinations.html" id="destination-button1">Book Now</a>
          </div>
          <div
            class="destination"
            id="destination2"
            onmouseover="showDetails2()"
            onmouseout="hideDetails2()"
          >
            <h3 id="destination-heading2">Tokyo, Japan</h3>
            <p id="destination-para2">
              A city of contrasts, blending modern technology with ancient
              traditions. Tokyo is home to some of the world's best shopping,
              dining, and nightlife, as well as stunning temples and gardens.
            </p>
            <a href="destinations.html" id="destination-button2">Book Now</a>
          </div>
          <div
            class="destination"
            id="destination3"
            onmouseover="showDetails3()"
            onmouseout="hideDetails3()"
          >
            <h3 id="destination-heading3">Rome, Italy</h3>
            <p id="destination-para3">
              The Eternal City, known for its rich history and iconic landmarks
              such as the Colosseum and the Vatican. Visitors can explore
              ancient ruins, indulge in delicious Italian cuisine, and immerse
              themselves in the city's vibrant culture.
            </p>
            <a href="destinations.html" id="destination-button3">Book Now</a>
          </div>
          <div
            class="destination"
            id="destination4"
            onmouseover="showDetails4()"
            onmouseout="hideDetails4()"
          >
            <h3 id="destination-heading4">Sydney, Australia</h3>
            <p id="destination-para4">
              Australia's largest city, famous for its stunning harbor, iconic
              Opera House, and beautiful beaches. Visitors can enjoy world-class
              dining, shopping, and entertainment, as well as exploring the
              city's vibrant neighborhoods and natural wonders.
            </p>
            <a href="destinations.html" id="destination-button4">Book Now</a>
          </div>
        </div>
     </section>
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

  <script src="js/home.js"></script>
</body>

</html>