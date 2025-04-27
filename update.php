<?php
   include "dbconnection.php";
   
   // Check if the 'mail' parameter exists in the GET request
   if (isset($_GET['mail'])) {
       $em = $_GET['mail'];
       $sql = "SELECT * FROM std_info WHERE `Email` = '$em'";
       $data = mysqli_query($conn, $sql);
       
       // Check if any result was returned
       if ($data && mysqli_num_rows($data) > 0) {
           $result = mysqli_fetch_assoc($data);
       } else {
           $result = null; // No result found
       }
   }
   ?>
<?php
   include "dbconnection.php";
   
   if (isset($_POST["update"])) {
       $em = $_POST['mail'];
       $pass = $_POST['pass'];
   
       $sql = "UPDATE std_info SET 
               `Password` = '$pass'
               WHERE `Email` = '$em'";
   
       if (mysqli_query($conn, $sql)) {
           header('location: std-all-data.php');
       } else {
           echo "<script>alert('Data Not Updated.')</script>";
       }
   
       mysqli_close($conn);
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update Login Admission Data</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.css" />
      <link rel="stylesheet" href="styles.css" />
      <style>
         .panel-heading {
         font-size: 25px;
         }
         .panel-default {
         margin-top: 10%;
         margin-left: 30%;
         width: 100%;
         background-color: darkgrey;
         }
         .container-fluid form .fields {
         display: flex;
         flex-wrap: wrap;
         justify-content: space-between;
         }
         form .fields .input-field {
         display: flex;
         width: 40%;
         flex-direction: column;
         }
         .form-group {
         width: 70px;
         margin-left: 90%;
         margin-top: 2%;
         }
      </style>
   </head>
   <body>
      <div class="container-fluid">
         <section class="row2">
            <div class="col-md-8">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <b>Update Login Form</b>
                  </div>
                  <div class="panel-body">
                     <div>
                        <form method="post" action="">
                           <div class="fields">
                              <div class="input-field">
                                 <label>Email</label>
                                 <input type="text" name="mail" value="<?php echo isset($result['Email']) ? $result['Email'] : ''; ?>" placeholder="Enter Your Email" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Password</label>
                                 <input type="text" name="pass" value="<?php echo isset($result['Password']) ? $result['Password'] : ''; ?>" placeholder="Enter Your Password" class="form-control" />
                              </div>
                           </div>
                           <div class="form-group">
                              <button type="submit" name="update" class="btn btn-primary">Update</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4"></div>
         </section>
      </div>
   </body>
</html>