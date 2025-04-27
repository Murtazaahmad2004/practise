<?php
   include "dbconnection.php";
   include "sidebar.php";
   
   if (isset($_POST["submit"])) 
   {
       $tn = $_POST['teacher_name'];
       $q1 = $_POST['question1'];
       $q2 = $_POST['question2'];
       $q3 = $_POST['question3'];
       $q4 = $_POST['question4'];
   
       $sql = "INSERT INTO teacher (`Teacher Name`, `Question 1`, `Question 2`, `Question 3`, `Question 4`) 
               VALUES ('$tn', '$q1', '$q2', '$q3', '$q4')";
   
       if (mysqli_query($conn, $sql)) {
           echo "<script>alert('New Data Inserted.')</script>";
       } else {
           echo "<script>alert('Data Not Inserted.')</script>";
       }
   
       mysqli_close($conn);
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Teacher Evaluation</title>
      <style>
         .profile_table{
         width: auto;
         margin-left: 250px;
         }
         .box-title{
         margin-left: 180px;
         }
      </style>
   </head>
   <body>
      <div class="card3">
         <div class="table-responsive">
            <form method="POST" action="">
               <table class="table profile_table" border="5" align="center">
                  <tbody>
                     <tr>
                        <td>
                           <input type="text" name="teacher_name" value="Engr.Muzammil Mehmood" readonly/>
                        </td>
                     </tr>
                     <tr>
                        <td>Q1.The Instructor is prepared for each class</td>
                        <td><input type="radio" name="question1" value="Strongly Agree"/></td>
                        <td>Strongly Agree</td>
                        <td><input type="radio" name="question1" value="Agree"/></td>
                        <td>Agree</td>
                        <td><input type="radio" name="question1" value="Strongly Disagree"/></td>
                        <td>Strongly Disagree</td>
                        <td><input type="radio" name="question1" value="Disagree"/></td>
                        <td>Disagree</td>
                     </tr>
                     <tr>
                        <td>Q2.The Instructor demonstrates knowledge of the subject</td>
                        <td><input type="radio" name="question2" value="Strongly Agree"/></td>
                        <td>Strongly Agree</td>
                        <td><input type="radio" name="question2" value="Agree"/></td>
                        <td>Agree</td>
                        <td><input type="radio" name="question2" value="Strongly Disagree"/></td>
                        <td>Strongly Disagree</td>
                        <td><input type="radio" name="question2" value="Disagree"/></td>
                        <td>Disagree</td>
                     </tr>
                     <tr>
                        <td>Q3.The Instructor has completed the whole course</td>
                        <td><input type="radio" name="question3" value="Strongly Agree"/></td>
                        <td>Strongly Agree</td>
                        <td><input type="radio" name="question3" value="Agree"/></td>
                        <td>Agree</td>
                        <td><input type="radio" name="question3" value="Strongly Disagree"/></td>
                        <td>Strongly Disagree</td>
                        <td><input type="radio" name="question3" value="Disagree"/></td>
                        <td>Disagree</td>
                     </tr>
                     <tr>
                        <td>Q4.The Instructor arrives on time</td>
                        <td><input type="radio" name="question4" value="Strongly Agree"/></td>
                        <td>Strongly Agree</td>
                        <td><input type="radio" name="question4" value="Agree"/></td>
                        <td>Agree</td>
                        <td><input type="radio" name="question4" value="Strongly Disagree"/></td>
                        <td>Strongly Disagree</td>
                        <td><input type="radio" name="question4" value="Disagree"/></td>
                        <td>Disagree</td>
                     </tr>
                     <tr>
                        <td><button type="submit" name="submit" class="btn btn-danger">Apply</button></td>
                     </tr>
                  </tbody>
               </table>
            </form>
         </div>
      </div>
   </body>
</html>