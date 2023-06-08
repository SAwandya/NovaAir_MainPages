<?php include "./db/db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<?php

$fnameErr = $mnameErr = $lnameErr = $addressErr = $genderErr = $passwordErr = $cpasswordErr = $phoneErr = $emailErr = $ageErr = $birthErr = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if((isset($_POST["submit"]))){

        if (empty($_POST["firstname"])) {
            $fnameErr = "First name is required";
        } else {
            $name = test_input($_POST["firstname"]);
        
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $fnameErr = "Only letters and white space allowed";
        }
        }

        if (empty($_POST["middlename"])) {
            
        } else {
            $name = test_input($_POST["middlename"]);
            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $mnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["lastname"])) {
            $lnameErr = "last name is required";
        } else {
            $name = test_input($_POST["lastname"]);
            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $lnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address name is required";
        } 

        
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        }

        if (empty($_POST["age"])) {
            $ageErr = "Age is required";
        }
        
        if (empty($_POST["dateofbirth"])) {
            $birthErr = "Date of birth is required";
        }

        $password = $_POST["password"];

        if (strlen($password) < 8) {
            // Password is too short
            $passwordErr = "Password should be at least 8 characters long.";
        } elseif (!preg_match("/[a-z]/", $password)) {
            // Password should contain at least one lowercase letter
            $passwordErr = "Password should contain at least one lowercase letter.";
        } elseif (!preg_match("/[A-Z]/", $password)) {
            // Password should contain at least one uppercase letter
            $passwordErr = "Password should contain at least one uppercase letter.";
        } elseif (!preg_match("/[0-9]/", $password)) {
            // Password should contain at least one digit
            $passwordErr = "Password should contain at least one digit.";
        } 

        if (empty($_POST["pconfirm"])) {
            $cpasswordErr = "confirm password is required";
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "phone number is required";
        }

        $c_password = $_POST["pconfirm"];

        if(!$c_password === $password){
            $cpasswordErr = "confirm password is incorrect..";
        }
        
        
        }

        if($fnameErr == "" && $mnameErr == "" &&  $lnameErr == "" && $addressErr == "" && $genderErr == "" && $passwordErr == "" && $cpasswordErr == "" && $emailErr == ""){

            $firstname = $_POST["firstname"];
            $middlename = $_POST["middlename"];
            $lastname = $_POST["lastname"];
            $address = $_POST["address"];
            $age = $_POST["age"];
            $dateofbirth = $_POST["dateofbirth"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            
            $qur = "INSERT INTO users VALUES (6, '$firstname', '$middlename', '$lastname', '$address', '$dateofbirth', '$age', '$password');".
                   "INSERT INTO user_email VALUES (6, '$email');".
                   "INSERT INTO user_phone VALUES (6, '$phone');";

            $result = $conn -> multi_query($qur);

            if($result === TRUE){
                $success = "You are successfully registered..";

                header("Location: ./newlogin.php");
            }else{
                $success = "Registration failed.." . $conn->error;
            }

            

        }
        
}
?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <label for="firstname">Enter first name : </label>
        <input type="text" name="firstname" id="firstname">
        <span>* <?php echo $fnameErr;?></span>

        <br>

        <label for="middlename">Enter middle name : </label>
        <input type="text" name="middlename" id="middlename">
        <span>* <?php echo $mnameErr;?></span>

        <br>

        <label for="lastname">Enter last name : </label>
        <input type="text" name="lastname" id="lastname">
        <span>* <?php echo $lnameErr;?></span>

        <br>

        <label for="address">Enter address : </label>
        <input type="text" name="address" id="address">
        <span>* <?php echo $addressErr;?></span>

        <br>

        <label for="phone">Enter phone number : </label>
        <input type="number" name="phone" id="phone">
        <span>* <?php echo $phoneErr;?></span>

        <br>

        <label for="email">Enter email :  : </label>
        <input type="email" name="email" id="address">
        <span>* <?php echo $emailErr;?></span>

        <br>

        <label for="age">Enter age : </label>
        <input type="number" name="age" id="age">
        <span>* <?php echo $ageErr;?></span>

        <br>

        <label for="dateofbirth">Enter date of birth : </label>
        <input type="date" name="dateofbirth" id="dateofbirth">
        <span>* <?php echo $birthErr;?></span>

        <br>

        <label for="password">Enter password : </label>
        <input type="password" name="password" id="password">
        <span>* <?php echo $passwordErr;?></span>

        <br>
        
        <label for="pconfirm">Enter confirm password : </label>
        <input type="password" name="pconfirm" id="pconfirm">
        <span>* <?php echo $cpasswordErr;?></span>

        <br>

        <button><a href="./newlogin.php">Login</a></button>

        <input type="submit" name="submit">

        <span>* <?php echo $success;?></span>

    </form>
</body>
</html>