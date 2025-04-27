<?php
   include "dbconnection.php";
   
   // Fetch existing data for the form
   $id = $_GET['id'];
   $sql = "SELECT * FROM almuni_form WHERE `Std Id` = '$id'";
   $data = mysqli_query($conn, $sql);
   $result = mysqli_fetch_assoc($data);
   ?>
<?php
   include "dbconnection.php";
   
   if (isset($_POST["update"])) {
       $id = $_POST['id'];
       $entry = $_POST['date'];
       $deg = $_POST['deg'];
       $pdy = $_POST['pdy'];
       $prog = $_POST['prog'];
   
       $sql = "UPDATE almuni_form SET 
               `Entry Date` = '$entry', 
               `Degree` = '$deg', 
               `Passing Date` = '$pdy', 
               `Program` = '$prog'
               WHERE `Std Id` = '$id'";
   
       // Check if the update was successful
       if (mysqli_query($conn, $sql)) {
           // Redirect after successful update
           header('Location: almuni-data.php');
           exit; // Ensure no further code is executed after the redirect
       } else {
           // Display error message if the update fails
           echo "<script>alert('Data Not Updated. Error: " . mysqli_error($conn) . "');</script>";
       }
   
       // Close the database connection
       mysqli_close($conn);
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update Alumni Data</title>
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
                     <b>Update Alumni Form</b>
                  </div>
                  <div class="panel-body">
                     <div>
                        <form method="post" action="">
                           <div class="fields">
                              <div class="input-field">
                                 <label>Std Id</label>
                                 <input type="text" name="id" value="<?php echo $result['Std Id']; ?>" readonly class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Entry Date</label>
                                 <input type="text" name="date" value="<?php echo $result['Entry Date']; ?>" placeholder="Enter Date" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Degree</label>
                                 <input type="text" name="deg" value="<?php echo $result['Degree']; ?>" placeholder="Degree" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Passing Date</label>
                                 <input type="text" name="pdy" value="<?php echo $result['Passing Date']; ?>" placeholder="Enter Passing Date" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Program</label>
                                 <input type="text" name="prog" value="<?php echo $result['Program']; ?>" placeholder="Program" class="form-control" />
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