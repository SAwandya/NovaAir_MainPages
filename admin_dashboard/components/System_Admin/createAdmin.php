
<?php 
    include "../../db/db.php";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if(isset($_POST["submit"])) {

        $nameErr = $emailErr = $passwordErr = $idErr = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(empty($_POST["id"])){
                $idErr = "id is required";
            }

            if(empty($_POST["staff"])){
                $staffErr = "Staff type is required";
            }

            if(empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);

                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $nameErr = "Only letters and white spaces allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }

            if(empty($_POST["password"])){
                $passwordErr = "Password is required";
            }

        }

        if($nameErr === "" && $emailErr === "" && $passwordErr === "" && $idErr === "") {

            $staffID = $_POST["id"];
            $fullname = $_POST["name"];

            $first_name = "";
            $middle_name = "";
            $last_name = "";

            $name_parts = explode(" ", $fullname);

            if (count($name_parts) == 3) {
                $first_name = $name_parts[0];
                $middle_name = $name_parts[1];
                $last_name = $name_parts[2];
            }else if(count($name_parts) == 2){
                $first_name = $name_parts[0];
                $middle_name = "";
                $last_name = $name_parts[1];
            }else{
                echo "Invalide input..";
            }

            $email = $_POST["email"];
            $password = $_POST["password"];
            $staffType = $_POST["staff"];
            $contact = $_POST["contact"];
        
            $sql = "INSERT INTO staff VALUES('{$staffID}', '{$first_name}', '{$middle_name}', '{$last_name}', '{$staffType}', '{$password}');".
                   "INSERT INTO staff_email VALUES('{$staffID}', '{$email}');".
                   "INSERT INTO staff_phone VALUES('{$staffID}', '{$contact}');";
    
            $result = $conn->multi_query($sql);

            if($result === TRUE){
                header("Location: ./createAdminMessage.php");
            } else {
                echo "Error: " . $conn->error;
            }

        } else {

            echo $nameErr;
            echo $emailErr;
            echo $passwordErr;
            echo $idErr;
        }

        //header("Location: ../../Staff_dashboard.php");
    }
?>

<?php $conn->close() ?>