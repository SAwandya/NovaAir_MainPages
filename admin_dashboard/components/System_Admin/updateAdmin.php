<?php 
    include "../../db/db.php";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if(isset($_POST["submit"])) {

        $fnameErr = $emailErr = $passwordErr = $surnameErr = $contactErr ="";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(empty($_POST["fname"])) {
                $fnameErr = "First name is required";
            } else {
                $name = test_input($_POST["fname"]);

                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $fnameErr = "Only letters and white spaces allowed";
                }
            }

            if(empty($_POST["surname"])) {
                $nameErr = "Surname is required";
            } else {
                $name = test_input($_POST["surname"]);

                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $surnameErr = "Only letters and white spaces allowed";
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

           if(empty($_POST["contact"])){
                $contactErr = "Contact no is required";
           }

            if(empty($_POST["password"])){
                $passwordErr = "Password is required";
            }

        }

        if($fnameErr === "" && $emailErr === "" && $passwordErr === "" && $surnameErr === "") {

            $fname = $_POST["fname"];
            $surname = $_POST["surname"];
            $mname = $_POST["mname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $contact = $_POST["contact"];
            $id = $_POST["id"];

            $sql =  "UPDATE staff SET FirstName = '{$fname}', MiddleName = '{$mname}', SurName = '{$surname}', StaffPassword = '{$password}' WHERE StaffID = '{$id}';".
                    "UPDATE staff_email SET Email = '{$email}' WHERE StaffID = '{$id}';".        
                    "UPDATE staff_phone SET PhoneNo = '{$contact}' WHERE StaffID = '{$id}';";                  

            $result = $conn->multi_query($sql);

            if($result === TRUE){
                header("Location: ./updateAdminMessage.php");
            } else {
                echo "Error: " . $conn->error;
            }

        } else {

            echo $fnameErr;
            echo $emailErr;
            echo $passwordErr;
            echo $surnameErr;
        }

        //header("Location: ../../Staff_dashboard.php");
    }
?>

<?php $conn->close() ?>