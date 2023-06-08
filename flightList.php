<?php include "./db/db.php" ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight list</title>
</head>
<body>
    
</body>


   

    <table>
        <thead>
            <td>FROM</td>
            <td>TO</td>
            <td>Eco-Class-Price</td>
            <td>Bus-Class-Price</td>
        </thead>
        <tbody>

        <?php 

            if(isset($_POST["submit"])){

                $from_airport = $_POST["from_airport"];
                $to_airport = $_POST["to_airport"];
                $way = $_POST["way"];
                $d_date = $_POST["d_date"];
                $r_date = $_POST["r_date"];
                $passengers = $_POST["passengers"];
                $class = $_POST["class"];

                $qur = "SELECT r.DepartureAirport, r.ArrivalAirport, p.Price
                        FROM flight_routes r, passenger_flight p
                        WHERE r.RouteNo = p.RouteNo AND r.DepartureAirport = '{$from_airport}' AND r.ArrivalAirport = '{$to_airport}' AND p.DepartureDate = '{$d_date}' AND p.ArrivalDate = '{$r_date}';";

                $result = $conn -> query($qur);

                if($result -> num_rows > 0){

                    while($row = $result -> fetch_assoc()){

?>          <tr>
                <td><?php echo $row["DepartureAirport"] ?></td>
                <td><?php echo $row["ArrivalAirport"] ?></td>
                <td><?php echo $row["Price"] ?></td>
                <td><?php echo $row["Price"] ?></td>
            </tr>
            
            <?php 
                

                    }
                }

            echo "<h1> No Result </h1>";

            }


            ?>

        </tbody>
        
    </table>
</html>
<?php $conn -> close() ?>