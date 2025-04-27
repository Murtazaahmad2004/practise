<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.css" />
      <link rel="stylesheet" href="styles.css" />
      <title>DashBoard</title>
      <style>
         body {
         overflow-x: hidden;
         }
         .row1{
         margin-left:20%;
         }
         .card {
         background-color:beige;
         border: 1px solid #dee2e6;
         text-align: center;
         border-radius: 0.25rem;
         padding: 15px;
         margin-bottom: 20px;
         width:870px;
         margin-left: 1%;
         }
         .card2 {
         margin-top: 2%;
         margin-left: 13%;
         background-color: aliceblue;
         }
         .card4 {
         text-align: center;
         margin-left: 2%;
         margin-top: 3%;
         background-color: beige;
         color: chocolate;
         width: 250px;
         height: 160px;
         font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         }
         .row2{
         margin-left: 15%;
         }
         .card5 {
         text-align: center;
         margin-left: 2%;
         margin-top: 2%;
         background-color: beige;
         color: chocolate;
         width: 250px;
         height: 100px;
         font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         }
         .row3{
         margin-left: 15%;
         }
         .card-title {
         color: chocolate;
         font-size: medium;
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         }
         .bgg-warning {
         color:black;
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         }
         h4 a{
         color:chocolate;
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         }
         button a{
         color:aliceblue;
         }
         .btn-danger{
         margin-right: 250px;
         }
         .profile-container {
         display: flex;
         margin-top: 20px;
         }
         .profile-info {
         text-align: center;
         }
         .profile-img {
         width: 200px;
         height: 200px;
         border-radius: 50%;
         }
         .personal-info {
         margin-left: 200px;
         background-color: aliceblue;
         }
         .personal-info table {
         width: 100%;
         }
         .personal-info td {
         padding: 8px;
         border-bottom: 1px solid #ddd;
         }
      </style>
   </head>
   <body>
      <div>
         <?php include 'sidebar.php'?>
      </div>
      <div class="navbar">
         <?php include 'navbar.php'?>
      </div>
      <!-- start card div -->
      <div class="row1">
         <div class="col-md-2 card">
            <h4 class="card-title">CGPA Including Fail Courses</h4>
            <h4>3.0</h4>
         </div>
         <div class="col-md-2 card">
            <h4 class="card-title">CGPA Excluding Fail Courses</h4>
            <h4>3.0</h4>
         </div>
         <div class="col-md-2 card">
            <h4><a href="register.php">Register New Courses</a></h4>
            <h4>Course</h4>
         </div>
         <div class="col-md-2 card">
            <h4><a href="feevoucher.php">Generate A Fee Voucher</a></h4>
            <h4>Voucher</h4>
         </div>
         <div class="col-md-2 card">
            <h4><a href="schedule.php">Examination Schedule</a></h4>
            <h4>Schedule</h4>
         </div>
      </div>
      <!-- end card div -->
      <!-- start card2 div -->
      <div class="row">
         <div class="col-md-12 card2">
            <h3>Murtaza Ahmad - (843-2023)</h3>
            <h6 class="card-subtitle">Murtaza Ahmad S/O Tahir Mehmood</h6>
            <h6 class="card-subtitle">Admission Status: Confirmed</h6>
         </div>
      </div>
      <!-- end card2 div -->
      <!-- start div for card3 -->
      <div class="row">
         <div class="col-md-12 profile-container profile-info personal-info">
            <img src="profile.jpg" alt="Profile Picture" class="profile-img">
            <table>
               <tr>
                  <td>Official Email:</td>
                  <td>murtazaahmad2004@gmail.com</td>
               </tr>
               <tr>
                  <td>Admission Date:</td>
                  <td>14 Feb 2023</td>
               </tr>
               <tr>
                  <td>Campus:</td>
                  <td>Islamabad</td>
               </tr>
               <tr>
                  <td>Program:</td>
                  <td>BS (Digi-Sys&Web-Tech)</td>
               <tr>
                  <td>Date Of Birth:</td>
                  <td>23-04-2004</td>
               </tr>
               <tr>
                  <td>Status:</td>
                  <td>
                     <div class=" label label-table label-success">Active</div>
                  </td>
               <tr>
                  <td>CNIC:</td>
                  <td>37301-8188443-9</td>
               <tr>
                  <td>Contact:</td>
                  <td>0332-5814143</td>
               </tr>
               <tr>
                  <td>Address:</td>
                  <td>Hno.Q 471 Godian Wali Masjid Mohalah Niyarian Rawalpindi</td>
               </tr>
            </table>
         </div>
      </div>
      <!-- end div for card3 -->
      <!-- start div for Card4 -->
      <div class="row2">
         <div class="col-md-3 card4">
            <h4 class="bgg-warning">Course Evaluation</h4>
            <p>Every student has to fill the Course Evaluation Proforma at the end of the semester which is a mandatory process for Admit Card Issuing.</p>
            <button class="btn btn-danger"><a href="courseve.php">Go</a></button> 
         </div>
         <div class="col-md-3 card4">
            <h4 class="bgg-warning">Teacher Evaluation</h4>
            <p>Every student has to fill the Teacher Evaluation Proforma at the end of the semester which is a mandatory process for Admit Card Issuing.</p>
            <button class="btn btn-danger"><a href="teacheve.php">Go</a></button> 
         </div>
         <div class="col-md-3 card4">
            <h4 class="bgg-warning">Alumni Form</h4>
            <p>Every student has to fill the Alumni Form at the time of graduation and need to continue Alumni Updation throughout his/her Career.</p>
            <button class="btn btn-danger"><a href="almuni.php">Go</a></button> 
         </div>
      </div>
      <!-- end div for Card4 -->
      <!-- start div for RCH PCH -->
      <div class="row3">
         <div class="col-md-3 card5 card-body">
            <h4 class="card-title">Required Credit Hrs 132</h4>
            <h4>No of credit hours required for degree completion</h4>
         </div>
         <div class="col-md-3 card5 card-body">
            <h4 class="card-title">Passed Credit Hrs 34</h4>
            <h4>No of credit hours passed by student</h4>
         </div>
         <div class="col-md-3 card5 card-body">
            <h4 class="card-title">Degree Status</h4>
            <h4>Either student eligible for degree or not</h4>
         </div>
      </div>
      <!-- end div for RCH PCH -->
   </body>
</html>