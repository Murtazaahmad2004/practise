<?php
   include "sidebar.php";
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Course Evaluation</title>
      <style>
         .profile_table{
         width: auto;
         margin-left: 250px;
         }
         .box-title{
         margin-left: 180px;
         }
         .btn-danger{
         width: 150px;
         margin-left: 700px;
         }
         button a{
         color: aliceblue;
         }
      </style>
   </head>
   <body>
      <div class="card3">
         <h3 class="box-title">Course Evaluation:</h3>
         <div class="table-responsive">
            <table class="table profile_table" border="9" align="center">
               <tbody>
                  <tr>
                     <td>Data Structure & Algorithm(TH)</td>
                     <td><button class="btn btn-danger"><a href="dsaeve.php">Go For Evaluation</a></button></td>
                  </tr>
                  <tr>
                     <td>Data Structure & Algorithm(LAB)</td>
                     <td><button class="btn btn-danger"><a href="dsalabeve.php">Go For Evaluation</a></button></td>
                  </tr>
                  <tr>
                     <td>Intro To Software Engeerning</td>
                     <td><button class="btn btn-danger"><a href="iseeve.php">Go For Evaluation</a></button></td>
                  </tr>
                  <tr>
                     <td>Operating System(TH)</td>
                     <td><button class="btn btn-danger"><a href="osteve.php">Go For Evaluation</a></button></td>
                  </tr>
                  <tr>
                     <td>Operating System(LAB)</td>
                     <td><button class="btn btn-danger"><a href="oslabeve.php">Go For Evaluation</a></button></td>
                  </tr>
                  <tr>
                     <td>Principle of Economics & Management</td>
                     <td><button class="btn btn-danger"><a href="poemeve.php">Go For Evaluation</a></button></td>
                  </tr>
                  <tr>
                     <td>IT Depth Elective(TH)</td>
                     <td><button class="btn btn-danger"><a href="iteve.php">Go For Evaluation</a></button></td>
                  </tr>
                  <tr>
                     <td>IT Depth Elective(LAB)</td>
                     <td><button class="btn btn-danger"><a href="itlabeve.php">Go For Evaluation</a></button></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </body>
</html>