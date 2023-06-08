<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <!-- Font Awesome -->
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"
    ></script>
    <script
      src="https://kit.fontawesome.com/38f42574c5.js"
      crossorigin="anonymous"
    ></script>

    <!-- CSS Style Sheet -->
    <link rel="stylesheet" href="styles/wherewefly.css" />

    <title>Where We Fly</title>
  </head>
  <body>
    <nav>
      <div class="top-logo">
        <img
          src="images/logo_with_txt.png"
          height="66px"
          style="margin-top: 20px; margin-left: 10px"
        />
      </div>
      <div class="topnav">
        <a href="index.html">Home</a>
        <a href="book.html">Book</a>
        <a href="manage.html">Manage</a>
        <a href="wherewefly.html">Where we fly</a>
        <a href="destinations.html">Best Destinations</a>
        <a href="contact.html">Contact Us</a>
        <a href="newlogin.html" style="margin-left: 75px; margin-right: 150px"
          >Login | Sign up</a
        >
      </div>
    </nav>
    <div class="main-container">
      <section class="header-section">
        <h2>Where We Fly</h2>
        <p>
          In response to travel restrictions, we are currently flying to limited
          destinations. Check the following list to see the destinations we are
          currently flying to.
        </p>
      </section>
      <section class="destinations-tables">
        <div class="button-container">
          <button id="btn1" onclick="openTable1()">Africa</button>
          <button id="btn2" onclick="openTable2()">Australasia</button>
          <button id="btn3" onclick="openTable3()">Europe</button>
          <button id="btn4" onclick="openTable4()">Far East</button>
          <button id="btn5" onclick="openTable5()">Gulf and Middle East</button>
          <button id="btn6" onclick="openTable6()">Indian Ocean Islands</button>
          <button id="btn7" onclick="openTable7()">North America</button>
          <button id="btn8" onclick="openTable8()">South America</button>
          <button id="btn9" onclick="openTable9()">West Asia</button>
        </div>
        <div>
          <div class="table-container" id="table1">
            <span>Africa</span>

            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Abidjan</td>
                    <td>Felix Houphouet Boigny Airport (ABJ)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Abuja</td>
                    <td>Abuja Nnamdi Azikiwe International Airport (ABV)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Accra</td>
                    <td>Kotoka International Airport (ACC)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Addis Ababa</td>
                    <td>Bole International Airport (ADD)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Algiers</td>
                    <td>Houari Boumediene Airport (ALG)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Cairo</td>
                    <td>Cairo International Airport (CAI)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Cape Town</td>
                    <td>Cape Town International Airport (CPT)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Casablanca</td>
                    <td>Mohammed V International Airport (CMN)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Conakry</td>
                    <td>Conakry International Airport (CKY)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-container" id="table2">
            <span>Australasia</span>
            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Auckland</td>
                    <td>Auckland International Airport (AKL)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Brisbane</td>
                    <td>Brisbane Airport (BNE)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Christchurch</td>
                    <td>Christchurch International Airport (CHC)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Melbourne</td>
                    <td>Melbourne Tullamarine Airport (MEL)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Perth</td>
                    <td>Perth Airport (PER)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Sydney</td>
                    <td>Kingsford Smith Airport (SYD)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-container" id="table3">
            <span>Europe</span>
            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Amsterdam</td>
                    <td>Amsterdam Airport Schiphol (AMS)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Athens</td>
                    <td>Eleftherios Venizelos Airport (ATH)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Barcelona</td>
                    <td>El Prat Airport (BCN)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Birmingham</td>
                    <td>Birmingham International Airport (BHX)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Bologna</td>
                    <td>Bologna Airport (BLQ)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Brussels</td>
                    <td>Brussels Airport (BRU)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Budapest</td>
                    <td>Ferenc Liszt International Airport (BUD)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Copenhagen</td>
                    <td>Copenhagen Airport (CPH)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Dublin</td>
                    <td>Dublin Airport (DUB)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-container" id="table4">
            <span>Far East</span>
            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Bali</td>
                    <td>Ngurah Rai International Airport (DPS)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Bangkok</td>
                    <td>Suvarnabhumi International Airport (BKK)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Beijing</td>
                    <td>Beijing Capital Airport (PEK)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Cebu</td>
                    <td>Mactan-Cebu International Airport (CEB)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Clark</td>
                    <td>
                      Clark International Airport, Manila Angeles City (CRK)
                    </td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Guangzhou</td>
                    <td>Guangzhou Baiyun International Airport (CAN)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Hanoi</td>
                    <td>Noi Bai International Airport (HAN)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-container" id="table5">
            <span>Gulf and Middle East</span>
            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Amman</td>
                    <td>Queen Alia International Airport (AMM)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Baghdad</td>
                    <td>Baghdad International Airport (BGW)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Bahrain</td>
                    <td>Bahrain International Airport (BAH)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Basra</td>
                    <td>Basra International Airport (BSR)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Beirut</td>
                    <td>Rafic Hariri International Airport (BEY)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Dammam</td>
                    <td>King Fahd International Airport (DMM)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Dubai</td>
                    <td>Dubai International Airport (DXB)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Jeddah</td>
                    <td>King Abdulaziz International Airport (JED)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Kuwait</td>
                    <td>Kuwait International Airport (KWI)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-container" id="table6">
            <span>Indian Ocean Islands</span>
            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Colombo</td>
                    <td>Bandaranaike Airport (CMB)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Malé</td>
                    <td>Velana International Airport (MLE)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Mauritius</td>
                    <td>
                      Sir Seewoosagur Ramgoolam International Airport (MRU)
                    </td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Seychelles</td>
                    <td>Seychelles International Airport (SEZ)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-container" id="table7">
            <span>North America</span>
            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Boston</td>
                    <td>Logan International Airport (BOS)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Chicago</td>
                    <td>O'Hare International Airport (ORD)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Dallas</td>
                    <td>Dallas/Fort Worth International Airport (DFW)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Houston</td>
                    <td>George Bush Intercontinental Airport (IAH)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Los Angeles</td>
                    <td>Los Angeles International Airport (LAX)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Mexico City</td>
                    <td>Mexico City International Airport (MEX)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Miami</td>
                    <td>Miami International Airport (MIA)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>New York</td>
                    <td>John F Kennedy International Airport (JFK)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>New York</td>
                    <td>Newark Liberty International Airport (EWR)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-container" id="table8">
            <span>South America</span>
            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Buenos Aires</td>
                    <td>Ministro Pistarini International Airport (EZE)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Rio de Janeiro</td>
                    <td>
                      Antônio Carlos Jobim International Airport (Galeão) (GIG)
                    </td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>São Paulo</td>
                    <td>Guarulhos International Airport (GRU)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-container" id="table9">
            <span>West Asia</span>
            <div class="table-container-inside">
              <table>
                <thead>
                  <tr class="table-row table-row1 table-head-row">
                    <th>City</th>
                    <th>Airport</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-row table-row2">
                    <td>Ahmedabad</td>
                    <td>
                      Sardar Vallabhbhai Patel International Airport (AMD)
                    </td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Bengaluru</td>
                    <td>Bengaluru International Airport (BLR)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Chennai</td>
                    <td>Chennai International Airport (MAA)</td>
                  </tr>
                  <tr class="table-row table-row1">
                    <td>Delhi</td>
                    <td>Indira Gandhi International Airport (DEL)</td>
                  </tr>
                  <tr class="table-row table-row2">
                    <td>Hyderabad</td>
                    <td>Rajiv Gandhi Airport (HYD)</td>
                  </tr>
                </tbody>
              </table>
            </div>
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
          <p>
            <a href="mailto:novaairways@company.com">novaairways@company.com</a>
          </p>
        </div>
      </div>

      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          Soaring to new heights, we offer exceptional service, unmatched
          comfort, and seamless travel experiences. Fly with us today!
        </p>
        <div>
          <i class="social-icon fab fa-facebook-f"></i>
          <i class="social-icon fab fa-twitter"></i>
          <i class="social-icon fab fa-instagram"></i>
          <i class="social-icon fas fa-envelope"></i>
        </div>
      </div>
    </footer>

    <script src="js/wherewefly.js"></script>
  </body>
</html>
