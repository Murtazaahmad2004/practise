<?php
   include "dbconnection.php";
   include "sidebar.php";
   
   if (isset($_POST["apply"])) 
   {
       if (isset($_POST['course_name']) && !empty($_POST['course_name'])) {
           foreach ($_POST['course_name'] as $tn) {
               $sql = "INSERT INTO registered_course (`Course Name`) VALUES ('$tn')";
               if (mysqli_query(mysql: $conn, query: $sql)) {
                   echo "<script>alert('Course $tn is registered.')</script>";
               } else {
                   echo "<script>alert('Course $tn is not registered.')</script>";
               }
           }
       } else {
           echo "<script>alert('No course selected.')</script>";
       }
   
       mysqli_close(mysql: $conn);
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Register Course</title>
      <style>
         .profile_table{
         width: 800px;
         }
         .box-title{
         margin-left: 180px;
         }
         .btn-danger{
         width: 100px;
         margin-left: 700px;
         }
      </style>
   </head>
   <body>
      <div class="card3">
         <h3 class="box-title">Course Registration:</h3>
         <div class="table-responsive">
            <form method="post">
               <table class="table profile_table" border="5" align="center">
                  <tbody>
                     <tr>
                        <td>Data Structure (Theory):</td>
                        <td><input type="checkbox" name="course_name[]" value="Data Structure (Theory)"/></td>
                     </tr>
                     <tr>
                        <td>Data Structure (Lab):</td>
                        <td><input type="checkbox" name="course_name[]" value="Data Structure (Lab)"/></td>
                     </tr>
                     <tr>
                        <td>Intro to Software Engineering:</td>
                        <td><input type="checkbox" name="course_name[]" value="Intro to Software Engineering"/></td>
                     </tr>
                     <tr>
                        <td>Operating System (Theory):</td>
                        <td><input type="checkbox" name="course_name[]" value="Operating System (Theory)"/></td>
                     </tr>
                     <tr>
                        <td>Operating System (Lab):</td>
                        <td><input type="checkbox" name="course_name[]" value="Operating System (Lab)"/></td>
                     </tr>
                     <tr>
                        <td>Principle of Economics and Management:</td>
                        <td><input type="checkbox" name="course_name[]" value="Principle of Economics and Management"/></td>
                     </tr>
                     <tr>
                        <td>IT Depth-Elective (Theory):</td>
                        <td><input type="checkbox" name="course_name[]" value="IT Depth-Elective (Theory)"/></td>
                     </tr>
                     <tr>
                        <td>IT Depth-Elective (Lab):</td>
                        <td><input type="checkbox" name="course_name[]" value="IT Depth-Elective (Lab)"/></td>
                     </tr>
                     <tr>
                        <td>
                           <div class="form-group">
                              <input class="btn btn-danger" type="submit" name="apply" value="Apply"/> 
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </form>
         </div>
      </div>
   </body>
</html>