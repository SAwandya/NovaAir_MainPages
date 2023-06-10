<?php include "./db/db.php" ?>

<?php 

    session_start();

    // Check if the user is not logged in
    if (!isset($_SESSION['staffType'])) {
    // Redirect the user to the login page or any other page for authentication
    header("Location: ../adminloging.php");
    exit();
    }

    

?>


<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dshboard</title>
    <script src="https://kit.fontawesome.com/a814f0de03.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Staff_dashboard.css">
    <script src="./scripts/dashboard.js"></script>

    
    
</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="../images/logo_with_txt.png" alt="">
            <h2>NovaAir Airways</h2>
           
        </div>

        <ul class="items">
            
            <li id="systemAdmin" onclick="apearSystemAdmin()">System Administrator</li>
            <li id="admin" onclick="apearAdmin()">Administrator</li>
            <li id="customerSr" onclick="apearCustomerSr()">Customer Service Rep</li>
            <li id="maintenanceStaff" onclick="apearMiantenanceStaff()">Maintenance Staff</li>
        </ul>

        <?php 

            echo '<script>';
            echo 'function hideListItem(itemId) {';
            echo '    var listItem = document.getElementById(itemId);';
            echo '    listItem.classList.add("hidden");';
            echo '}';
            echo '</script>';

            if($_SESSION['staffType'] === 'Admin'){
                echo '<script>';
                echo 'hideListItem("systemAdmin");'; // Call the function
                echo '</script>';
            }

            if($_SESSION['staffType'] === 'CSR'){
                echo '<script>';
                echo 'hideListItem("admin");';
                echo 'hideListItem("systemAdmin");'; // Call the function
                echo '</script>';
            }

            if($_SESSION['staffType'] === 'MS'){

                echo '<script>';
                echo 'hideListItem("admin");';
                echo 'hideListItem("systemAdmin");';
                echo 'hideListItem("customerSr");'; // Call the function
                echo '</script>';
            }
    
    
    ?>

    </section>

    <section id="interface">
            <div class="navigation">
                <div class="n1">
                    <div class="logout">
                        <form action="./logout.php" method="post">
                            <button type="submit" name="submit">Logout</button>
                        </form>
                    </div>
                </div>

                <div class="profile">
                    <i class="far fa-bell"></i>
                    <img src="./dashboard_profile_pic/WhatsApp Image 2023-05-14 at 00.01.52.jpg" alt="">
                </div>
            </div>

            <h3 class="i-name">
                Dashboard  
            </h3>
            
            <!---------------------------------- Dynamic area start ----------------------------------------------->
            <div id="main-content">

            </div>
            <!--------------------------------- Dynamic area end -------------------------------------------->
    </section>
</body>
</html>

<?php $conn->close(); ?>