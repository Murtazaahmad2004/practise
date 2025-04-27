<?php
   include "sidebar.php";
   include "dbconnection.php";
   
   if (isset($_POST["submit"])) 
   {
       $id = $_POST['id'];
       $name = $_POST['name'];
       $deg = $_POST['deg'];
       $pro = $_POST['prog'];
   
       $sql = "INSERT INTO fee_voucher (`Std ID`, `Student Name`, `Degree`, `Program`) 
               VALUES ('$id', '$name', '$deg', '$pro')";
   
       if (mysqli_query($conn, $sql)) {
           echo "<script>alert('Data Inserted.');</script>";
           echo "<script>window.open('challan.php','_self')</script>";
       } else {
           echo "<script>alert('Data Not Inserted.');</script>";
       }
   
       mysqli_close($conn);
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Generate Fee Voucher</title>
      <style>
         .panel-default{
         margin-left: 200px;
         }
         .container-fluid{
         margin-left: 200px;
         margin-top: 100px;
         }
         .form-group{
         margin-left: 85%;
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
                  <b>Generate Fee Voucher</b>
               </div>
               <div class="panel-body">
                  <div>
                     <form method="post">
                        <div class="fields">
                           <div class="input-field">
                              <label>Std Id</label>
                              <input type="text" name="id" placeholder="Enter Std Id" class="form-control" required />
                           </div>
                           <div class="input-field">
                              <label>Student Name</label>
                              <input type="text" name="name" placeholder="Enter Student Name" class="form-control" required />
                           </div>
                           <div class="input-field">
                              <label>Degree</label>
                              <input type="text" name="deg" placeholder="Degree Name" class="form-control" required />
                           </div>
                           <div class="input-field">
                              <label>Program</label>
                              <input type="text" name="prog" placeholder="Enter Program" class="form-control" required />
                           </div>
                           <div class="form-group">
                              <input type="submit" name="submit" value="Generate" class="form-control btn btn-primary"/>
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