<?php
   include "dbconnection.php";
   
   $nameErr = $emailErr = $pass1Err = $pass2Err = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $isFormValid = true;
   
       // Name Validation
       if (empty($_POST['name'])) {
           $nameErr = "Name is required.";
           $isFormValid = false;
       } else {
           $uname = input_data($_POST['name']);
           if (!preg_match("/^[a-zA-Z\s]*$/", $uname)) {
               $nameErr = "Only alphabets and white space are allowed.";
               $isFormValid = false;
           }
       }
   
       // Email Validation
       if (empty($_POST['mail'])) {
           $emailErr = "Email is required.";
           $isFormValid = false;
       } else {
           $em = input_data($_POST['mail']);
           if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
               $emailErr = "Invalid email format.";
               $isFormValid = false;
           }
       }
   
       // Password Validation
       if (empty($_POST['pass1'])) {
           $pass1Err = "Password is required.";
           $isFormValid = false;
       } else {
           $pass = input_data($_POST['pass1']);
           if (strlen($pass) < 6) {
               $pass1Err = "Password must be at least 6 characters.";
               $isFormValid = false;
           }
       }
   
       // Confirm Password Validation
       if (empty($_POST['pass2'])) {
           $pass2Err = "Please confirm your password.";
           $isFormValid = false;
       } else {
           $cpass = input_data($_POST['pass2']);
           if ($pass !== $cpass) {
               $pass2Err = "Passwords do not match.";
               $isFormValid = false;
           }
       }
   
       if ($isFormValid) {
           // Auto-generate User ID
           $fixedYear = "2025";
           $getLastIdQuery = "SELECT `User ID` FROM user_table ORDER BY `User ID` DESC LIMIT 1";
           $result = mysqli_query($conn, $getLastIdQuery);
   
           if ($result && mysqli_num_rows($result) > 0) {
               $row = mysqli_fetch_assoc($result);
               $lastId = $row['User ID'];
               $lastNumberPart = intval(explode("-", $lastId)[0]);
               $newNumberPart = $lastNumberPart + 1;
           } else {
               $newNumberPart = 100; // First ID
           }
   
           $newUserId = $newNumberPart . '-' . $fixedYear;
   
           // Insert into database
           $sql = "INSERT INTO user_table (`User ID`, `User Name`, `Email`, `Password`, `Confirm Password`) 
                   VALUES ('$newUserId', '$uname', '$em', '$pass', '$cpass')";
   
           if (mysqli_query($conn, $sql)) {
               echo "<script>alert('New User Registered Successfully with User ID: $newUserId');</script>";
           } else {
               echo "<script>alert('Error: Could not register.');</script>";
           }
       } else {
           echo "<script>alert('Please correct the form errors.');</script>";
       }
   
       mysqli_close($conn);
   }
   
   function input_data($data): string {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Signup Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
      <script src="bootstrap-3.4.1-dist/js/bootstrap.js"></script>
      <style>
         body {
         background-attachment: fixed;
         background-repeat: no-repeat;
         background-position: center;
         background-size: cover;
         font-weight: bold;
         overflow-x: hidden;
         overflow-y: hidden;
         }
         .btnHome {
         margin-left: 150px;
         }
         .container-fluid {
         margin-left: 75%;
         margin-top: 5%;
         width: 70%;
         }
         .panel-heading {
         font-size: small;
         }
         .error {
         color: red;
         }
      </style>
      <script>
         function goToNextPage() {
             window.location.href = "index3.php";
             // window.location.href = "forgetpass.php";
         }
         
         function openNewWindow(event) {
             event.preventDefault(); // Prevent the form from submitting
         
             var id = document.getElementsByName('id')[0].value;
             var name = document.getElementsByName('name')[0].value;
             var mail = document.getElementsByName('mail')[0].value;
             var pass1 = document.getElementsByName('pass1')[0].value;
             var pass2 = document.getElementsByName('pass2')[0].value;
         
             var idErr = "";
             var nameErr = "";
             var emailErr = "";
             var pass1Err = "";
             var pass2Err = "";
         
             if (id === "") {
                 idErr = "Id is required.";
             } else if (!/^[0-9]*$/.test(id)) {
                 nameErr = "Only alphabets and white space are allowed.";
             }
         
             if (name === "") {
                 nameErr = "Name is required.";
             } else if (!/^[a-zA-Z\s]*$/.test(name)) {
                 nameErr = "Only alphabets and white space are allowed.";
             }
         
             if (mail === "") {
                 emailErr = "Email is required.";
             } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)) {
                 emailErr = "Invalid email format.";
             }
         
             if (pass1 === "") {
                 pass1Err = "Password is required.";
             } else if (pass1.length < 6) {
                 pass1Err = "Password must be at least 6 characters.";
             }
         
             if (pass2 === "") {
                 pass2Err = "Please confirm your password.";
             } else if (pass1 !== pass2) {
                 pass2Err = "Passwords do not match.";
             }
         
             if (id === "" && nameErr === "" && emailErr === "" && pass1Err === "" && pass2Err === "") {
                 document.forms[0].submit();
                 window.open("index3.php", "_blank");
             } else {
                 document.getElementById('IdErr').innerText = idErr;
                 document.getElementById('nameErr').innerText = nameErr;
                 document.getElementById('emailErr').innerText = emailErr;
                 document.getElementById('pass1Err').innerText = pass1Err;
                 document.getElementById('pass2Err').innerText = pass2Err;
             }
         }
      </script>
   </head>
   <body background="pic1.jpg">
      <div class="container-fluid">
         <section class="row">
            <div class="col-md-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <b>Signup</b>
                  </div>
                  <div class="panel-body">
                     <img src="logo.jpg" class="img-thumbnail" style="width: 190px; margin-left:75px">
                     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                           <label>User Name</label>
                           <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                           <span class="error"><?php echo $nameErr;?></span>
                        </div>
                        <div class="form-group">
                           <label>Email</label>
                           <input type="email" name="mail" placeholder="Enter Your Email" class="form-control">
                           <span class="error"><?php echo $emailErr;?></span>
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input type="password" name="pass1" placeholder="Enter Password" class="form-control">
                           <span class="error"><?php echo $pass1Err;?></span>
                        </div>
                        <div class="form-group">
                           <label>Confirm Password</label>
                           <input type="password" name="pass2" placeholder="Confirm Password" class="form-control">
                           <span class="error"><?php echo $pass2Err;?></span>
                        </div>
                        <div class="form-group">
                           <label class="btnHome">Already Have An Account.</label>
                           <input type="button" value="Login" id="btnHome" onClick="goToNextPage()" />
                        </div>
                        <button type="submit" class="btn btn-primary">Signup</button>
                        <p>
                           Need help logging in or have questions about our platform? Please contact that email!
                           hod.sfcic@hamdard.edu.pk
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </body>
</html>

