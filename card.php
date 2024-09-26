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
            padding-right: 40px;
        }
        .box-title{
            margin-left: 180px;
        }
        .form-group{
            width: 100px;
            margin-left: 1250px;
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
            <td>English</td>
            <td>Y</td>
            <td>Y</td>
            <td>09</td>
            <td>10:00AM-01:00PM</td>
        </tr>
            <td>12-08-2024</td>
            <td>Monday</td>
            <td>Math</td>
            <td>Y</td>
            <td>Y</td>
            <td>09</td>
            <td>10:00AM-01:00PM</td>
        </tr>
        <tr>
            <td>14-08-2024</td>
            <td>Wednesday</td>
            <td>Urdu</td>
            <td>Y</td>
            <td>Y</td>
            <td>09</td>
            <td>10:00AM-01:00PM</td>
        </tr>
            <td>16-08-2024</td>
            <td>Friday</td>
            <td>Computer</td>
            <td>Y</td>
            <td>Y</td>
            <td>09</td>
            <td>10:00AM-01:00PM</td>
        </tr>
        <tr>
            <td>17-08-2024</td>
            <td>Saturday</td>
            <td>Pakstudy</td>
            <td>Y</td>
            <td>Y</td>
            <td>09</td>
            <td>10:00AM-01:00PM</td>
        </tr>
            <td>20-08-2024</td>
            <td>Tuesday</td>
            <td>Chmistry</td>
            <td>Y</td>
            <td>Y</td>
            <td>09</td>
            <td>10:00AM-01:00PM</td>
        </tr>
        <tr>
            <td>21-08-2024</td>
            <td>Wednesday</td>
            <td>Physics</td>
            <td>Y</td>
            <td>Y</td>
            <td>09</td>
            <td>10:00AM-01:00PM</td>
        </tr>
            <td>22-08-2024</td>
            <td>Thursday</td>
            <td>Islamiyat</td>
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