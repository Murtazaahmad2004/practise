<?php
   include "dbconnection.php";
   include "sidebar.php";
   
   $emailErr = $passErr = $stdIdErr = "";
   $email = $pass = $stdId = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
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
               $sql = "INSERT INTO std_info (`Std ID`, Email, Password) VALUES ('$email', '$pass', '$stdId')";
               mysqli_query($conn, $sql);
   
               echo "<script>alert('Login Ok')</script>";
               echo "<script>window.open('admission.php','_self')</script>";
           } else {
               echo "<script>alert('Invalid username and password')</script>";
           }
       }
       mysqli_close($conn);
   }
   
   // Function to sanitize user input
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
      <script type="text/javascript" href="bootstrap-3.4.1-dist\js\bootstrap.js"></script>
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
      <script>
         function goToNextPage() {
             window.location.href = "admission.php";
         }
         
         function openNewWindow(event) {
             event.preventDefault(); // Prevent the form from submitting
         
             var id = document.getElementsByName('std_id')[0].value;
             // var mail = document.getElementsByName('id')[0].value;
             var name = document.getElementsByName('name')[0].value;
             // var mail = document.getElementsByName('mail')[0].value;
             var pass = document.getElementsByName('pass')[0].value;
             // var pass2 = document.getElementsByName('pass2')[0].value;
         
             var $stdIdErr = "";
             // var idErr = "";
             var nameErr = "";
             // var emailErr = "";
             var passErr = "";
             // var pass2Err = "";
         
             if (id === "") {
                 stdIdErr = "Id is required.";
             } else if (isNaN(id)) {
                 stdIdErr = "Only Numbers are allowed.";
             }
         
             if (name === "") {
                 nameErr = "Name is required.";
             } else if (!/^[a-zA-Z\s]*$/.test(name)) {
                 nameErr = "Only alphabets and white space are allowed.";
             }
         
             if (pass === "") {
                 passErr = "Password is required.";
             } else if (pass.length < 6) {
                 passErr = "Password must be at least 6 characters.";
             }
         
             if (nameErr === "" && passErr === "" && stdIdErr === "") {
                 document.forms[0].submit();
                 window.open("dashboard.php", "_blank");
             } else {
                 document.getElementById('idErr').innerText = stdIdErr;
                 // document.getElementById('emailErr').innerText = emailErr;
                 document.getElementById('nameErr').innerText = nameErr;
                 // document.getElementById('emailErr').innerText = emailErr;
                 document.getElementById('passErr').innerText = passErr;
                 // document.getElementById('pass2Err').innerText = pass2Err;
             }
         }
      </script>
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
                        <form method="post" action="<?php echo htmlspecialchars(string: $_SERVER["PHP_SELF"]);?>">
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