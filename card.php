<?php
   include "sidebar.php";
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Admit Card</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
         th{
         padding-top: 10px;
         padding-bottom: 20px;
         padding-left: 30px;
         /* padding-right: 40px; */
         }
         .box-title{
         margin-left: 180px;
         }
         .form-group{
         width: 100px;
         margin-left: 1220px;
         }
      </style>
   </head>
   <body>
      <h2 class="box-title">Admit Card.</h2>
      <table border="5" align="center">
         <tr>
            <th>Exam Date</th>
            <th>Exam Day</th>
            <th>Subject</th>
            <th>Teacher Evaluation</th>
            <th>Course Evaluation</th>
            <th>Room No</th>
            <th>Exam Time</th>
         </tr>
         <tr>
            <td>10-08-2024</td>
            <td>Saturday</td>
            <td>Data Structure(Theory)</td>
            <td>Y</td>
            <td>Y</td>
            <td>02</td>
            <td>10:00AM-01:00PM</td>
         </tr>
         <td>12-08-2024</td>
         <td>Monday</td>
         <td>Data Structure(Lab)</td>
         <td>Y</td>
         <td>Y</td>
         <td>03</td>
         <td>10:00AM-01:00PM</td>
         </tr>
         <tr>
            <td>14-08-2024</td>
            <td>Wednesday</td>
            <td>Intro To Software Engeerning</td>
            <td>Y</td>
            <td>Y</td>
            <td>04</td>
            <td>10:00AM-01:00PM</td>
         </tr>
         <td>16-08-2024</td>
         <td>Friday</td>
         <td>Operating System(Theory)</td>
         <td>Y</td>
         <td>Y</td>
         <td>05</td>
         <td>10:00AM-01:00PM</td>
         </tr>
         <tr>
            <td>17-08-2024</td>
            <td>Saturday</td>
            <td>Operating System(Lab)</td>
            <td>Y</td>
            <td>Y</td>
            <td>06</td>
            <td>10:00AM-01:00PM</td>
         </tr>
         <td>20-08-2024</td>
         <td>Tuesday</td>
         <td>Principle Of Economics And Management</td>
         <td>Y</td>
         <td>Y</td>
         <td>07</td>
         <td>10:00AM-01:00PM</td>
         </tr>
         <tr>
            <td>21-08-2024</td>
            <td>Wednesday</td>
            <td>IT Depth-Elective(Theory)</td>
            <td>Y</td>
            <td>Y</td>
            <td>08</td>
            <td>10:00AM-01:00PM</td>
         </tr>
         <td>22-08-2024</td>
         <td>Thursday</td>
         <td>IT Depth-Elective(Lab)</td>
         <td>Y</td>
         <td>Y</td>
         <td>09</td>
         <td>10:00AM-01:00PM</td>
         </tr>
         </tbody>
      </table>
      <div class="form-group">
         <input type="button" value="Print" class="form-control btn btn-primary"/>
      </div>
   </body>
</html>