<?php 

    include "../../db/db.php";

    if(isset($_POST["submit"])){

        $flightId = $_POST['fid'];
        $ddate = $_POST['ddate'];
        $adate = $_POST['adate'];
        $dtime = $_POST['dtime'];
        $atime = $_POST['atime'];
        $price = $_POST['price'];
        $staff = $_POST['staff'];
        $route = $_POST['route'];

        $qur = "INSERT INTO passenger_flight 
                VALUES ('$flightId', '$ddate', '$adate', '$dtime', '$atime', '$price', '$staff', '$route');";

        if($conn->query($qur)){
            echo "success";
        }else{
            echo "fail";
        }
    
    }

$conn -> close();
?>