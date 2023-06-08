<?php include "../../db/db.php"; ?>

<?php 
    $sql3 = "DELETE FROM passengerflight WHERE flightNo = '" . $_POST['id'] . "';"; //concatinate with the sql query

    $result3 = $conn->query($sql3);

    if($conn->query($sql3) === TRUE){
        echo "Record delete successfully";
    }else{
        echo "Error deleteing record ". $conn->error;
    }
?>

<?php $conn->close() ?>