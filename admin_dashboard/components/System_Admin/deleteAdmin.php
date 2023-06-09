<?php include "../../db/db.php"; ?>

<?php 
    $sql3 = "DELETE FROM staff WHERE staffID = '" . $_POST['id'] . "';"; //concatinate with the sql query

    $result3 = $conn->query($sql3);

    if($result3 === TRUE){
        echo "Record delete successfully";
    }else{
        echo "Error deleteing record ". $conn->error;
    }

    header("Location: ./deleteAdminMessage.php");
?>

<?php $conn->close() ?>