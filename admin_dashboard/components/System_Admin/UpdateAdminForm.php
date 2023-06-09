<!DOCTYPE html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="addAdmin.css">
        <title>Update Admin</title>
    </head>
    <body>

    <?php 
    include "../../db/db.php";

    $ID = $_POST["id"];

    $qur = "SELECT s.FirstName, s.MiddleName, s.SurName, e.Email, p.PhoneNo, s.StaffPassword, s.StaffID
            FROM staff s, staff_email e, staff_phone p
            WHERE s.StaffID = e.StaffID AND s.StaffID = p.StaffID AND s.StaffID = {$ID} ;";

    $result = $conn->query($qur);

    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){

        

?>

        <section class="add-admin-container">        
            <div class="popup update-form">
                <a href="../../Staff_dashboard.php"><div class="close-btn">&times;</div></a>
                
                <div class="form">

                    <h2>Update admin</h2>

                    <form action="<?php echo htmlspecialchars("./updateAdmin.php"); ?>" method="post">
                        <div class="form-element">
                            <input type="hidden" name="id" id="id" value="<?php echo $row['StaffID'] ?>">
                        </div>
                        <div class="form-element">
                            <label for="fname">First name</label>
                            <input type="text" name="fname" id="fname" placeholder="<?php echo $row['FirstName'] ?>">
                        </div>
                        <div class="form-element">
                            <label for="mname">Middle name</label>
                            <input type="text" id="mname" name="mname" placeholder="<?php echo $row['MiddleName'] ?>">
                        </div>
                        <div class="form-element">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname" name="surname" placeholder="<?php echo $row['SurName'] ?>">
                        </div>
                        <div class="form-element">
                            <label for="email">email</label>
                            <input type="email" name="email" id="email" placeholder="<?php echo $row['Email'] ?>">
                        </div>

                        <div class="form-element">
                            <label for="password">password</label>
                            <input type="password" name="password" id="password" placeholder="<?php echo $row['StaffPassword'] ?>">
                        </div>

                        <div class="form-element">
                            <label for="contact">Contact no</label>
                            <input type="number" name="contact" id="contact" placeholder="<?php echo $row['PhoneNo'] ?>">
                        </div>
            
                        <div class="form-element">
                            <button type="submit" name="submit">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    
        <?php 
                
            }
        }
                      
                
                ?>   

<?php $conn->close() ?>    