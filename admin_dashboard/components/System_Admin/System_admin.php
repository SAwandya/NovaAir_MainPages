<?php include "../../db/db.php"; ?>

<div class="values">
                
    <div class="val-box">
        <i class="fa-solid fa-plane-circle-exclamation fa-xl"></i>
        <div>
            <h3>17</h3>
            <span>Total Flights</span>
        </div>
    </div>
    <div class="val-box">
        <i class="fa-solid fa-plane-lock fa-xl"></i>
        <div>
            <h3>9</h3>
            <span>Total Planes Grounded</span>
        </div>
    </div>
    <div class="val-box">
        <i class="fa-solid fa-plane-circle-check fa-xl"></i>
        <div>
            <h3>8</h3>
            <span>Total planes in Flights</span>
        </div>
    </div>
    
</div>

<!-------------------- Manage admins ------------------------------>

<div class="board">
    <h3>Manage staff</h3>
    <hr>
    <table width="100%">
        <thead>
            <tr>
                <td>Name</td>
                <td>ID</td>
                <td>Staff Type</td>
                <td>Contact No</td>
                <td>Update</td>
            </tr>
        </thead>
        <tbody>

        <?php 
                    $sql1 = "SELECT s.StaffID, s.FirstName, s.MiddleName, s.SurName, s.StaffType, e.Email, p.PhoneNo 
                             FROM staff s, staff_email e, staff_phone p
                             WHERE s.StaffID = e.StaffID AND s.StaffID = p.StaffID;";

                    $result = $conn->query($sql1);

                    if($result->num_rows > 0){
                        
                        while($row = $result->fetch_assoc()){
                            if($row['StaffType'] !== 'System Admin'){

                ?>
            <tr>
                
                <td class="people">
                    <img src="./dashboard_profile_pic/WhatsApp Image 2023-05-14 at 00.01.52.jpg" alt="">
                    <div class="people-de">
                        <h5><?php echo $row['FirstName']." ".$row['MiddleName']." ".$row['SurName'] ?></h5>
                        <p><?php echo $row['Email'] ?></p>
                    </div>
                </td>

                <td class="active"><p><?php echo $row['StaffID'] ?></p></td>

                <td class="active"><p><?php echo $row['StaffType'] ?></p></td>

                <td class="people-de" ><?php echo $row['PhoneNo'] ?></td>
                
                <td>
                <form action="./components/System_Admin/UpdateAdminForm.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['StaffID']; ?>">
                    <button type="submit" class="flight-update" >Update</button>
                </form>
                </td>  
            </tr>

            <?php  } }
                    } ?>
            
            <tr>
                <td class="people-de"><h3>Add a new staff member</h3></td>
                <td class="plus-icon">
                        
                    <a href="./components/System_Admin/addAdmin.php"><i class="fa-solid fa-circle-plus fa-2xl"></i></a>
                </td> 
            </tr>
        </tbody>
    </table>
    </div>

    <?php $conn->close() ?>