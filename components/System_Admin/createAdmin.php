
<?php 
    include "../../db/db.php";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if(isset($_POST["submit"])) {

        $nameErr = $emailErr = $passwordErr = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

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

        if($nameErr === "" && $emailErr === "" && $passwordErr === "") {

            $staffID = $_POST["id"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = "INSERT INTO staff VALUES('{$staffID}', 3, '{$name}', 'AD', '{$email}', '{$password}')";

            $result = $conn->query($sql);

            if($result === TRUE){
                echo "Success";
            } else {
                echo "Error: " . $conn->error;
            }

        } else {

            echo $nameErr;
            echo $emailErr;
            echo $passwordErr;
        }

        header("Location: ../../Staff_dashboard.php");
    }
?>

<?php $conn->close() ?>