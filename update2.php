<?php
   include "dbconnection.php";
   
   $id = $_GET['id'];
   $sql = "SELECT * FROM addmission_info WHERE `Std Id` = '$id'";
   $data = mysqli_query($conn, $sql);
   $result = mysqli_fetch_assoc($data);
   ?>
<?php
   include "dbconnection.php";
   
   if (isset($_POST["update"])) {
       $id = $_POST['id'];
       $fname = $_POST['name'];
       $lname = $_POST['lname'];
       $cnic = $_POST['cnic'];
       $faname = $_POST['fname'];
       $fcnic = $_POST['facnic'];
       $cno = $_POST['cnum'];
       $add = $_POST['address'];
       $prov = $_POST['province'];
       $cty = $_POST['city'];
   
       // Corrected SQL query (removed the extra comma before WHERE clause)
       $sql = "UPDATE addmission_info SET 
               `First Name` = '$fname', 
               `Last Name` = '$lname', 
               `Student CNIC` = '$cnic', 
               `Father Name` = '$faname', 
               `Father CNIC` = '$fcnic', 
               `Contact Number` = '$cno',
               `Address` = '$add',
               `Province` = '$prov',
               `City` = '$cty' 
               WHERE `Std Id` = '$id'";
   
       // Check if the update was successful
       if (mysqli_query($conn, $sql)) {
           // Redirect after successful update
           header('Location: adm-all-data.php');
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
      <title>Update Admission Data</title>
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
                     <b>Update Form</b>
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
                                 <label>First Name</label>
                                 <input type="text" name="name" value="<?php echo $result['First Name']; ?>" placeholder="Enter First Name" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Last Name</label>
                                 <input type="text" name="lname" value="<?php echo $result['Last Name']; ?>" placeholder="Enter Last Name" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Student CNIC</label>
                                 <input type="text" name="cnic" value="<?php echo $result['Student CNIC']; ?>" placeholder="Enter Student CNIC" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Father Name</label>
                                 <input type="text" name="fname" value="<?php echo $result['Father Name']; ?>" placeholder="Enter Father Name" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Father CNIC</label>
                                 <input type="text" name="facnic" value="<?php echo $result['Father CNIC']; ?>" placeholder="Enter Father CNIC" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Contact Number</label>
                                 <input type="text" name="cnum" value="<?php echo $result['Contact Number']; ?>" placeholder="Contact Number" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Address</label>
                                 <input type="text" name="address" value="<?php echo $result['Address']; ?>" placeholder="Enter Full Address" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>Province</label>
                                 <input type="text" name="province" value="<?php echo $result['Province']; ?>" placeholder="Province" class="form-control" />
                              </div>
                              <div class="input-field">
                                 <label>City</label>
                                 <input type="text" name="city" value="<?php echo $result['City']; ?>" placeholder="City" class="form-control" />
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