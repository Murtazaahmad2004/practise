<?php
   include "dbconnection.php";
   
   date_default_timezone_set(timezoneId: 'Asia/Karachi');
   
   if (isset($_POST["login"])) 
   {   
       $id = $_POST['name'];
       $pass = $_POST['pass'];
   
       $sql = "SELECT * FROM user_table WHERE `User Name` = '$id' AND `Password` = '$pass'";
       $que = mysqli_query(mysql: $conn, query: $sql);
   
       if ($que->num_rows > 0) {
       
           $login_time = date(format: 'Y-m-d H:i:s');
           $login_sql = "INSERT INTO login_history (`User Name`, `Login Time`) VALUES ('$id ', '$login_time')";
           mysqli_query(mysql: $conn, query: $login_sql);
   
           echo "<script>alert('Login Ok')</script>";
           echo "<script>window.open('dashboard.php','_self')</script>";
       } else {
           echo "<script>alert('Invalid username and password')</script>";
       }
       mysqli_close(mysql: $conn);
   }
   ?>
<?php
   $namerr = $passErr = "";
   $pass =  $pass = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       if(empty($_POST['name'])){
           $namerr = "Name is required.";
       } else {
           $pass = input_data($_POST['name']);
           if(!preg_match(pattern: "/^[0-9\-_]*$/", subject: $pass)){
               $namerr = "Only numericals and special characters (like - or _) are allowed.";
           }
       }
   
       if(empty($_POST['pass'])){
           $passErr = "Password is required.";
       } else {
           $pass = input_data($_POST['pass']);
           if(strlen(string: $pass) < 6){
               $passErr = "Password must be at least 6 characters."; 
           }
       }
   }
   
   function input_data($data): string{
       $data = trim(string: $data);
       $data = stripslashes(string: $data);
       $data = htmlspecialchars(string: $data);
       return $data;
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login Page.</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.css">
      <script type="text/javascript" href="bootstrap-3.4.1-dist\js\bootstrap.js"></script>
      <style>
         body{
         background-position: center; 
         background-attachment: fixed;
         color: black;
         font-weight: bold;
         font-size: 13px;
         }
         .panel-body{
         color:black; 
         font-weight: bold; 
         font-size: 15px;
         }
         .container-fluid{
         margin-top: 55px;
         }
         .error { color: red; }
      </style>
      <script>
         function goToNextPage() {
             window.location.href = "dashboard.php";
         }
         
         function openNewWindow(event) {
             event.preventDefault(); // Prevent the form from submitting
         
             var name = document.getElementsByName('name')[0].value;
             // var mail = document.getElementsByName('mail')[0].value;
             var pass = document.getElementsByName('pass')[0].value;
             // var pass2 = document.getElementsByName('pass2')[0].value;
         
             var nameErr = "";
             // var emailErr = "";
             var passErr = "";
             // var pass2Err = "";
         
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
         
             if (namerr === "" && passErr === "") {
                 document.forms[0].submit();
                 window.open("dashboard.php", "_blank");
             } else {
                 document.getElementById('namerr').innerText = namerr;
                 // document.getElementById('emailErr').innerText = emailErr;
                 document.getElementById('passErr').innerText = passErr;
                 // document.getElementById('pass2Err').innerText = pass2Err;
             }
         }
      </script>
   </head>
   <body background="piclo.jpg">
      <div class="container-fluid">
         <section class="row">
            <div class="col-md-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <b>Student Login</b>
                  </div>
                  <div class="panel-body">
                     <div>
                        <img src="logo.jpg" class="img-thumbnail" style="width: 150px; margin-left:75px">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                           <div class="form-group">
                              <label>User Name</label>
                              <input type="text" name="name" placeholder="Enter Your User Name" class="form-control">
                              <span class="error" id="namerr"><?php echo $namerr;?></span>
                           </div>
                           <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="pass" placeholder="Enter Your Password" class="form-control">
                              <span class="error" id="passErr"><?php echo $passErr;?></span>
                           </div>
                           <div class="form-group">
                              <button type="submit" name="login" class="form-control btn btn-primary">Login</button>
                           </div>
                           <p>
                              Need help logging in or have questions about our platform? Please contact that email!
                           </p>
                           <p>
                              hod.sfcic@hamdard.edu.pk
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </body>
</html>