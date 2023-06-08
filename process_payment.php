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

        $qur = "INSERT INTO payment VALUES (10, '$currentDate', '$method', '$totalPrice', '$cardNo', '$cvv', '$expireDate');";

        $result = $conn->query($qur);

        if($result === TRUE){

            $passengers = $_SESSION['passengers'];
            $flightno =  $_SESSION['flightno'];
            $price = $_SESSION['price'];
            $userID = $_SESSION['ID'];
            $classNo = $_SESSION['classNo'];

            $totalPrice = $_SESSION['totalPrice'];

            $qur2 = "INSERT INTO ticket VALUES (9 , 20, '$totalPrice', 0, '$flightno', '$userID', 10, '$classNo');";

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
