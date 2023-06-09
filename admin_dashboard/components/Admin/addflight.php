    <?php include "../../db/db.php"; ?>
    <!DOCTYPE html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="addflight.css">
        <title>Add Admin</title>
    </head>
    <body>
        <section class="add-admin-container">        
            <div class="popup">
                <a href="../../Staff_dashboard.php"><div class="close-btn">&times;</div></a>
                
                <div class="form">

                    <h2>Add admin</h2>
                    <form action="<?php echo htmlspecialchars('./createflight.php'); ?>" method="post">

                        <div class="form-element">

                            <input type="number" name="fid" id="fid" placeholder="Enter Flight ID" required>
                        </div>
                        <div class="form-element">
                            <label for="ddate">Enter Departure Date: </label>
                            <input type="Date" id="ddate" name="ddate" placeholder="Enter Departure Date" required>
                        </div>
                        <div class="form-element">
                            <label for="adate">Enter Enter Arrival Date: </label>
                            <input type="Date" id="adate" name="adate" placeholder="" required>
                        </div>
                        <div class="form-element">
                            <label for="dtime">Enter Departure Time: </label>
                            <input type="Time" name="dtime" id="dtime" placeholder="" required>
                        </div>

                        <div class="form-element">
                            <label for="atime">Enter Arrival Time: </label>
                            <input type="Time" name="atime" id="atime" placeholder="" required>
                        </div>

                        <div class="form-element">
                            
                            <input type="number" name="price" id="contact" placeholder="Enter Price" required>
                        </div>

                        <div class="form-element">
                            <label for="staff">Choose Staff member :</label>

                            <select name="staff" id="staff" required>

                            <?php 

                                $qur1 = "SELECT * FROM staff WHERE StaffType = 'Admin';";
                                
                                $result = $conn->query($qur1);

                                if($result->num_rows > 0){

                                    while($row = $result->fetch_assoc()){

                                        echo "<option value='{$row["StaffID"]}'>".$row['FirstName'].' '.$row['MiddleName'].' '. $row['SurName']."</option>";
                                    }
                                }
                            
                            ?>
                            </select>
                        </div>

                        <div class="form-element">
                            <label for="route">Choose Route :</label>

                            
                            <select name="route" id="staff" required>

                            <?php 

                                $qur2 = "SELECT * FROM flight_routes;";

                                $result = $conn->query($qur2);

                                if($result->num_rows > 0){

                                    while($row = $result->fetch_assoc()){

                                        echo "<option value='{$row["RouteNo"]}'>".$row['DepartureAirport'].' to '.$row['ArrivalAirport']."</option>";
                                    }
                                }
                            
                            ?>       
                            </select>
                        </div>
                        
            
                        <div class="form-element">
                            <button type="submit" name="submit">Add</button>
                        </div>

                    </form>
                    
                    
                   
                    
                </div>
            </div>
        </section>
    
        <script>
    <?php $conn->close() ?>