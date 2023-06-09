<?php include "../../db/db.php"; ?>

<div class="board">
    <h3>Manage Flights</h3>
    <hr>
    <table width="100%">
        <thead>
            <tr>
                <td>Flight ID</td>
                <td>Route</td>
                <td>Departure Date</td>
                <td>Arrival Date</td>
                <td>Departure Time</td>
                <td>Arrival Time</td>
                <td>Price</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>

        <?php 

            $sql2 = 'SELECT p.FlightNo, p.Price, p.DepartureDate, p.ArrivalDate, p.DepartureTime, p.ArrivalTime, r.ArrivalAirport, r.DepartureAirport
                     FROM passenger_flight p, flight_routes r 
                     WHERE p.RouteNo = r.RouteNo; ';

            $result2 = $conn->query($sql2);

            if($result2->num_rows > 0){

                while($row = $result2->fetch_assoc()){
        
        ?>
            <tr>
                <td class="people">
                    <div class="people-de">
                        <h5><?php echo $row['FlightNo'] ?></h5>
                        
                    </div>
                </td>

                <td class="people-des">
                    <h5><?php echo $row['DepartureAirport'].' to '.$row['ArrivalAirport'] ?></h5>
                </td>

                <td class="people-des"><h5><?php echo $row['DepartureDate'] ?></h5></td>

                <td class="people-des"><h5><?php echo $row['ArrivalDate'] ?></h5></td>

                <td class="people-des"><h5><?php echo $row['DepartureTime'] ?></h5></td>

                <td class="people-des"><h5><?php echo $row['ArrivalTime'] ?></h5></td>

                <td class="people-des"><h5><?php echo $row['Price'] ?> USD</h5></td>

                <td class="role">
                    <p>
                        <form action="./components/Admin/delete_flight.php" method="post">

                            <input type="hidden" name="id" value="<?php echo $row['FlightNo']; ?>">
                            <button class="flight-delete" type="submit">Delete</button>

                        </form>
                        
                    </p>
                </td>
            </tr>
        
            <?php
                  }
            } 
            ?>
            <tr>
                <td class="people-de"><h3>Add a new flight</h3></td>
                <td class="plus-icon">
                        
                    <a href="./components/Admin/addflight.php"><i class="fa-solid fa-circle-plus fa-2xl"></i></a>
                </td> 
            </tr>
        </tbody>
    </table>
    </div>


<div class="board">
    <h3>New Feedbacks</h3>
    <hr>
    <table width="100%">
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Date</td>
                <td>Feedback</td>
            </tr>
        </thead>
        <tbody>

        <?php 

    $sql = "SELECT * FROM feedback;";
    
    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        while($row = $result->fetch_assoc()){
   
?>

            <tr>
                <td class="people">
                    <div class="people-de">
                        <h5><?php echo $row['FirstName']." ".$row['MiddleName']?></h5>
                        
                    </div>
                </td>

                <td class="people-des">
                    <h5><?php echo $row['Email'] ?></h5>
                    
                </td>

                <td class="people-des">
                    <h5><?php echo $row['GivenDate'] ?></h5>
                    
                </td>

                <td><?php echo $row['Comment'] ?></td>
            </tr>

            <?php 
                     }
                    }
            ?>
        </tbody>
    </table>
    </div>

    <?php $conn->close() ?>