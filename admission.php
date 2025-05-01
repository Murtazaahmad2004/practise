<?php
   // Include database connection file
   include "dbconnection.php";
   
   if (isset($_POST["submit"])) {
       // Get form data
       $id = $_POST['id'];
       $fname = $_POST['name'];
       $lname = $_POST['lname'];
       $cnic = $_POST['cnic'];
       $faname = $_POST['fname'];
       $fcnic = $_POST['facnic'];
       $cno = $_POST['cnum'];
       $add = $_POST['address'];
       $pro = $_POST['province'];
       $ci = $_POST['city'];
   
       // SQL insert query
       $sql = "INSERT INTO admission_info (`Std Id`, `First Name`, `Last Name`, `Student CNIC`, `Father Name`, 
                     `Father CNIC`, `Contact Number`, `Address`, `Province`, `City`) 
               VALUES ('$id', '$fname', '$lname', '$cnic', '$faname', '$fcnic', '$cno', '$add', '$pro', '$ci')";

       // Execute the query and check for errors
       if (mysqli_query($conn, $sql)) {
           echo "<script>alert('New Data Inserted Successfully.');</script>";
       } else {
           echo "<script>alert('Error: Could not insert data.');</script>";
           echo "Error: " . mysqli_error($conn); // Debugging message to show SQL error
       }
   
       // Close the database connection
       mysqli_close($conn);
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Admission Form</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
         align-items: center;
         justify-content: space-between;
         }
         form .fields .input-field {
         display: flex;
         width: calc(50% - 5%);
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
      <div class="">
         <?php include 'sidebar.php'; ?>
      </div>
      <div class="container-fluid">
         <section class="row2">
            <div class="col-md-8">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <b>Admission Form</b>
                  </div>
                  <div class="panel-body">
                     <div>
                        <form method="post" action="">
                           <div class="fields">
                              <div class="input-field">
                                 <label>Std Id</label>
                                 <input type="text" name="id" placeholder="Enter Id" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>First Name</label>
                                 <input type="text" name="name" placeholder="Enter First Name" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>Last Name</label>
                                 <input type="text" name="lname" placeholder="Enter Last Name" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>Student CNIC</label>
                                 <input type="text" name="cnic" placeholder="Enter Student CNIC" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>Father Name</label>
                                 <input type="text" name="fname" placeholder="Enter Father Name" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>Father CNIC</label>
                                 <input type="text" name="facnic" placeholder="Enter Father CNIC" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>Contact Number</label>
                                 <input type="text" name="cnum" placeholder="Contact Number" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>Address</label>
                                 <input type="text" name="address" placeholder="Enter Full Address" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>Province</label>
                                 <input type="text" name="province" placeholder="Province" class="form-control" required />
                              </div>
                              <div class="input-field">
                                 <label>City</label>
                                 <input type="text" name="city" placeholder="City" class="form-control" required />
                              </div>
                           </div>
                     </div>
                     <div class="form-group">
                     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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