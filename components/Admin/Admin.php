<?php include "../../db/db.php"; ?>

<div class="board">
    <h3>Manage Flights</h3>
    <hr>
    <table width="100%">
        <thead>
            <tr>
                <td>Flight ID</td>
                <td>Route</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>

        <?php 

            $sql2 = 'SELECT p.flightNo, r.arrivalAirport, r.departureAirport  
                     FROM passengerflight p, route r 
                     WHERE p.RID = r.routeID; ';

            $result2 = $conn->query($sql2);

            if($result2->num_rows > 0){

                while($row = $result2->fetch_assoc()){
        
        ?>
            <tr>
                <td class="people">
                    <div class="people-de">
                        <h5><?php echo $row['flightNo'] ?></h5>
                        
                    </div>
                </td>

                <td class="people-des">
                    <h5><?php echo $row['departureAirport'].' to '.$row['arrivalAirport'] ?></h5>
                </td>

                <td class="role">
                    <p>
                        <form action="./components/Admin/delete_flight.php" method="post">

                            <input type="hidden" name="id" value="<?php echo $row['flightNo']; ?>">
                            <button class="flight-delete" type="submit">Delete</button>

                        </form>
                        
                    </p>
                </td>
            </tr>

            <?php
                  }
            } 
            ?>
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
                <td>Feedback</td>
            </tr>
        </thead>
        <tbody>

        <?php 

    $sql = "SELECT * FROM feedback";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        while($row = $result->fetch_assoc()){


   
?>

            <tr>
                <td class="people">
                    <div class="people-de">
                        <h5><?php echo $row['name'] ?></h5>
                        
                    </div>
                </td>

                <td class="people-des">
                    <h5><?php echo $row['email'] ?></h5>
                    
                </td>

                <td><?php echo $row['comment'] ?></td>
            </tr>

            <?php 
                     }
                    }
            ?>
        </tbody>
    </table>
    </div>

    <?php $conn->close() ?>