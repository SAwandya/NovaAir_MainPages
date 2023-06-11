
<?php 
    include "../../db/db.php";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if(isset($_POST["submit"])) {

        $nameErr = $emailErr = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = test_input($_POST["name"]);

        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white spaces allowed";
        }
                 
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
            
        }

        if($nameErr === "" && $emailErr === "") {

            $staffID = $_POST["id"];
            $fullname = $_POST["name"];

            $first_name = "";
            $middle_name = "";
            $last_name = "";

            $name_parts = explode(" ", $fullname);

            if(count($name_parts) == 2 || count($name_parts) == 3 ){

                if (count($name_parts) == 3) {
                    $first_name = $name_parts[0];
                    $middle_name = $name_parts[1];
                    $last_name = $name_parts[2];
                }else if(count($name_parts) == 2){
                    $first_name = $name_parts[0];
                    $middle_name = "";
                    $last_name = $name_parts[1];
                }
                
            }else{
                echo "First name and Middle name and Surname required..";
            }

            $email = $_POST["email"];
            $password = $_POST["password"];
            $staffType = $_POST["staff"];
            $contact = $_POST["contact"];

            $qur4 = "SELECT COUNT(*) AS count FROM staff_email WHERE Email = '$email';";

            $result3 = $conn->query($qur4);

            if($result3 === false){
                 echo "Error executing the query: " . $conn->error;
            }else{

              $row = $result3->fetch_assoc();
              $emailCount = $row['count'];
            
            if($emailCount === '0'){
        
            $sql = "INSERT INTO staff VALUES('{$staffID}', '{$first_name}', '{$middle_name}', '{$last_name}', '{$staffType}', '{$password}');".
                   "INSERT INTO staff_email VALUES('{$staffID}', '{$email}');".
                   "INSERT INTO staff_phone VALUES('{$staffID}', '{$contact}');";
    
            $result = $conn->multi_query($sql);

            if($result === TRUE){
                header("Location: ./createAdminMessage.php");
            } else {
                echo "Error: " . $conn->error;
            }

        } else{
            echo "Email already exists. Please choose a different email.";
        }
    }
    }else {

        echo $nameErr;
        echo $emailErr;
    }
        //header("Location: ../../Staff_dashboard.php");
    }
?>

<?php $conn->close() ?>