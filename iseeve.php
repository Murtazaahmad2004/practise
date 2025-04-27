<?php
   include "dbconnection.php";
   include "sidebar.php";
   
   if (isset($_POST["submit"])) 
   {
       $id = $_POST['course_id'];
       $tn = $_POST['course_name'];
       $q1 = $_POST['question1'];
       $q2 = $_POST['question2'];
       $q3 = $_POST['question3'];
       $q4 = $_POST['question4'];
   
       $sql = "INSERT INTO course (`Course Id`, `Course Name`, `Question 1`, `Question 2`, `Question 3`, `Question 4`) 
               VALUES ('$id', '$tn', '$q1', '$q2', '$q3', '$q4')";
   
       if (mysqli_query(mysql: $conn, query: $sql)) {
           echo "<script>alert('New Data Inserted.')</script>";
       } else {
           echo "<script>alert('Data Not Inserted.')</script>";
       }
   
       mysqli_close(mysql: $conn);
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Intro To Software Engeerning Evaluation</title>
      <style>
         .profile_table{
         width: auto;
         margin-left: 250px;
         }
         .box-title{
         margin-left: 180px;
         }
         h2{
         text-align: center;
         }
      </style>
   </head>
   <body>
      <div class="card3">
         <h2>Course Evaluation</h2>
         <div class="table-responsive">
            <form method="POST" action="">
               <table class="table profile_table" border="5" align="center">
                  <tbody>
                     <tr>
                        <td>
                           <input type="text" name="course_name" value="Intro To Software Enger" readonly/>
                           <input type="text" name="course_id" value="11325" readonly/>
                        </td>
                     </tr>
                     <tr>
                        <td>Q1.The course objectives were clear</td>
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
                        <td>Q2.The Course workload was manageable</td>
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
                        <td>Q3.I participated actively in the course</td>
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
                        <td>Q4.I think I have made progress in this course</td>
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