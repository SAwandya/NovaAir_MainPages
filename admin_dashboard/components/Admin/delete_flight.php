<?php include "../../db/db.php"; ?>

<?php 
    $flightNo = $_POST["id"];

    $sql3 = "DELETE FROM flight_airport WHERE FlightNo = '{$flightNo}';".
            "DELETE FROM passenger_flight WHERE FlightNo = '{$flightNo}';";

    $result3 = $conn->multi_query($sql3);

    if( $result3 === TRUE){
        
        header("Location: ./flightDeleteMessage.php");
    }else{
        echo "Error deleteing record ". $conn->error;
    }
?>

<?php $conn->close() ?>