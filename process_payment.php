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
