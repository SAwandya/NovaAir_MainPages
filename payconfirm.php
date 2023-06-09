<?php 
session_start();
include "./db/db.php" ?>

<?php 

    $carNoErr = $methodErr = $cvvErr = $dateErr = "";

    if(isset($_POST['submit'])){

        if(empty($_POST['card_number'])){
            $carNoErr = "card number is required"; 
        }

        if(empty($_POST['method'])){
            $methodErr = "Card type is required"; 
        }

        if(empty($_POST['expiry_date'])){
            $dateErr = "expiry date is required"; 
        }

        if(empty($_POST['cvv'])){
            $cvvErr = "CVV date is required"; 
        }

    if($carNoErr == "" && $methodErr == "" &&  $cvvErr == "" &&  $dateErr == ""){

        $currentDate = date('Y-m-d');

        $method = $_POST['method'];
        $totalPrice = $_SESSION['totalPrice'];
        $cardNo = $_POST['card_number'];
        $cvv = $_POST['cvv'];
        $expireDate = $_POST['expiry_date'];

        $qur = "INSERT INTO payment (PaidDate, Method, TotalAmount, CardNo, Cvv, ExpireDate) 
                VALUES ('$currentDate', '$method', '$totalPrice', '$cardNo', '$cvv', '$expireDate');";

        if($conn->query($qur) === TRUE){

            $lastID = $conn->insert_id;
            
            $passengers = $_SESSION['passengers'];
            $flightno =  $_SESSION['flightno'];
            $price = $_SESSION['price'];
            $userID = $_SESSION['ID'];
            $classNo = $_SESSION['classNo'];

            $totalPrice = $_SESSION['totalPrice'];

            $qur2 = "INSERT INTO ticket (Price, FlightNo, UserID, PaymentID, ClassNo) 
                     VALUES ('$totalPrice', '$flightno', '$userID', $lastID, '$classNo');";

            $result2 = $conn->query($qur2);

            if($result2 === TRUE){
                echo "Success";
            } else {
                echo "Error: " . $conn->error;
            }
                echo "Success";

        } else {
            echo "Error: " . $conn->error;
        }


    }

    }

?>


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

    <!-- CSS Style Sheet -->
    <link rel="stylesheet" href="styles/payconfirm.css" />
    <title>Payment Confirm</title>
</head>

<body>
    <div class="card">

        <h2>Payment Completed</h2>
        <div class="payment-amount">
            <p>Total Payment</p>
            <h1>LKR 237801</h1>
        </div>

        <div>
            <p>Your Booking Reference Number</p>
            <h5>000001</h5>
        </div>
        
        <a href="./index.php">
            <button>
                Download the invoice
            </button>
        </a>

    </div>

</body>

</html>