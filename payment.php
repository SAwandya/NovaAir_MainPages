<?php 

session_start();

include "./db/db.php";

$classNo = $multiplier = "";

$class = $_SESSION['class'];
$price = $_SESSION['price'];

$qur1 = "SELECT * FROM class WHERE ClassType = '$class';";

$result = $conn -> query($qur1);

while($row = $result->fetch_assoc()){
    $classNo = $row['ClassNo'];
    $multiplier = $row['Multiplier'];
}

$totalPrice = $price * $multiplier;

$_SESSION['totalPrice'] = $totalPrice;
$_SESSION['classNo'] = $classNo;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Style Sheet -->
    <link rel="stylesheet" href="styles/payment.css">

    <!-- Font Awesome  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
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
        <!------------------ Navigation bar --------------------->

      <?php include "./components/navbar.php" ?>
      </nav>
    <div class="main-container">
        <h1>Payments</h1>
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <h4>Tokoyo, Japan</h4>
                <form action="#">
                    <h3>To pay</h3>
                    <h1>LKR <?php echo $totalPrice ?></h1>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">

                        <form action="process_payment.php" method="post">
                            <label for="card_number">Card Number:</label>
                            <input type="number" id="card_number" name="card_number" required>

                            <label for="method">Enter card type :</label>
                            <select name="method" id="method">
                                <option value="Visa">Visa Card</option>
                                <option value="Master">Master Card</option>
                            </select>

                            <label for="expiry_date">Expiry Date:</label>
                            <input type="Date" id="expiry_date" name="expiry_date" required>

                            <label for="cvv">CVV:</label>
                            <input type="number" id="cvv" name="cvv" required><br>

                            <input name="submit" type="submit" value="Submit Payment">

                          </form>
                        <!-- <h3>Pay with credit card</h3>

                        <label for="ccn"> Credit Number</label>
                        <input id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">

                        <label for="Expiration"> Expiration </label>
                        <input type="number" placeholder="Month" />
                        <input type="number" placeholder="Year" />

                        <label for="Expiration"> CCV </label>
                        <input type="number" placeholder="CCV" />
                        <button type="submit" class="sign-in_btn">
                            <span>Pay Now</span>
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>