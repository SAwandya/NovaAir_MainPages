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
    <h3>Manage Admins</h3>
    <hr>
    <table width="100%">
        <thead>
            <tr>
                <td>Name</td>
                <td>ID</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>

        <?php 
                    $sql1 = "SELECT * FROM staff;";

                    $result = $conn->query($sql1);

                    if($result->num_rows > 0){
                        
                        while($row = $result->fetch_assoc()){
                            if($row['role'] == 'AD'){

                           
                   
                ?>
            <tr>
                
                <td class="people">
                    <img src="./dashboard_profile_pic/WhatsApp Image 2023-05-14 at 00.01.52.jpg" alt="">
                    <div class="people-de">
                        <h5><?php echo $row['name'] ?></h5>
                        <p><?php echo $row['email'] ?></p>
                    </div>
                </td>

                <td class="active"><p><?php echo $row['staffID'] ?></p></td>

                <td class="role">
                    <form action="./components/System_Admin/deleteAdmin.php" method="post">

                        <input type="hidden" name="id" value="<?php echo $row['staffID']; ?>">
                        <p><button type="submit" class="flight-delete" >Delete</button></p>

                    </form>
                    
                </td>
            </tr>

            <?php  } }
                    } ?>
            
            <tr>
                <td class="people-de"><h3>Add a new admin</h3></td>
                <td></td>
                <td class="plus-icon">
                        
                    <a href="./components/System_Admin/addAdmin.php"><i class="fa-solid fa-circle-plus fa-2xl"></i></a>
                </td> 
            </tr>
        </tbody>
    </table>
    </div>

    <?php $conn->close() ?>