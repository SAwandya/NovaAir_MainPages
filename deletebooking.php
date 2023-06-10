<?php include "./db/db.php"; ?>

<?php 

    $message = "";

    if(isset($_POST["delete"])){

    $id = $_POST["bookingid"];

    $sql3 = "DELETE FROM ticket WHERE TicketNo = '{$id}';";
            

    $result3 = $conn->query($sql3);

    if( $result3 === TRUE){
        
        $message = "Booking deleted successfuly";
    }else{
        $message = "Error deleteing record ". $conn->error;
    }

?>

<?php $conn->close() ?>

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
    <link rel="stylesheet" href="./styles/payconfirm.css" />
    <title>Payment Confirm</title>
</head>

<body>
    <div class="card">

        <h2><?php echo $message ?></h2>
       

        
        
        <a href="./index.php"><button>
            OK
        </button></a>

    </div>

</body>

</html>

<?php } ?>