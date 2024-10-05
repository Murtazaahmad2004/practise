<?php

include "dbconnection.php";
include "sidebar.php";

$emailErr = $passErr = $stdIdErr = "";  // Added stdIdErr
$email = $pass = $stdId = "";  // Added stdId

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Student ID
    if (empty($_POST['std_id'])) {
        $stdIdErr = "Student ID is required.";
    } else {
        $stdId = input_data($_POST['std_id']);
        if (!is_numeric($stdId)) {  // Assuming Std Id should be numeric
            $stdIdErr = "Invalid Student ID format.";
        }
    }

    // Validate email
    if (empty($_POST['mail'])) {
        $emailErr = "Email is required.";
    } else {
        $email = input_data($_POST['mail']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }
    }

    // Validate password
    if (empty($_POST['pass'])) {
        $passErr = "Password is required.";
    } else {
        $pass = input_data($_POST['pass']);
        if (strlen($pass) < 6) {
            $passErr = "Password must be at least 6 characters."; 
        }
    }

    // Proceed only if there are no validation errors
    if (empty($emailErr) && empty($passErr) && empty($stdIdErr)) {
        $sql = "SELECT * FROM user_table WHERE Email = '$email' AND Password = '$pass'";
        $que = mysqli_query($conn, $sql);
        
        if ($que->num_rows > 0) {
            // Insert the Std Id into the std_info table if login is successful
            $sql = "INSERT INTO std_info (Email, Password, `Std Id`) VALUES ('$email', '$pass', '$stdId')";
            mysqli_query($conn, $sql);

            echo "<script>alert('Login Ok')</script>";
            echo "<script>window.open('admission.php','_self')</script>";
        } else {
            echo "<script>alert('Invalid username and password')</script>";
        }
    }
    mysqli_close($conn);
}

function input_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.css">
    <script type="text/javascript" href="bootstrap-3.4.1-dist/js/bootstrap.js"></script>

    <style>
        .panel-heading{
            font-size: 15px;
        }
        .panel-body{
            color:black; 
            font-weight: bold; 
            font-size: 20px;
        }
        .container-fluid{
            margin-left: 460px;
            margin-top: 120px;
        }
        .error { color: red; }
    </style>
</head>
<body>
<div class="container-fluid">
        <section class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Admission Portal Login</b>
                    </div>
                    <div class="panel-body">
                        <div>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="form-group">
                                    <label>Std ID</label>
                                    <input type="text" name="std_id" placeholder="Enter Your Student ID" class="form-control">
                                    <span class="error" id="stdIdErr"><?php echo $stdIdErr;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="mail" placeholder="Enter Your Email" class="form-control">
                                    <span class="error" id="emailErr"><?php echo $emailErr;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pass" placeholder="Enter Your Password" class="form-control">
                                    <span class="error" id="passErr"><?php echo $passErr;?></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="login" class="form-control btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>                        
</body>
</html>