<head>
   <style>
      .sidebar{
      width: 170px;
      height: 1000%;
      padding-top: 15px;
      position: fixed;
      top: 0%;
      left: 0px;
      color: aliceblue;
      background-color:black;
      z-index: 3;
      animation:reverse;
      transition: 2s ease;
      transform: translateX(0px);
      }
      .sidebar a{
      color: aliceblue;
      }
      .toggle{
      position: fixed;
      width: 30px;
      height: 30px;
      top: 0%;
      left: 0%;
      z-index: 4;
      cursor: pointer;
      border-radius: 3px;
      background-color: aliceblue;
      }
      .toggle .common{
      position: absolute;
      width: 22px;
      height: 4px;
      border-radius: 50px;
      background-color:blueviolet;
      transition: 0.2s ease;   
      }
      .toggle .top_line{
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      }
      .toggle .middle_line{
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      }
      .toggle .bottom_line{
      top: 70%;
      left: 50%;
      transform: translate(-50%, -50%);
      }
      input:checked ~.toggle .top_line{
      top: 14px;
      left: 2px;
      width: 25px;
      transform: rotate(45deg);
      }
      input:checked ~.toggle .bottom_line{
      top: 14px;
      left: 2px;
      width: 25px;
      transform: rotate(-45deg);
      }
      input:checked ~.toggle .middle_line{
      opacity: 0;
      transform: translateX(20px);
      }
      input:checked ~.sidebar{
      transform: translateX(-170px);
      }
      .dropdown-toggle{
      background-color:black;
      }
      .space{
      margin-bottom: 10px;
      }
      .space1{
      margin-top: 10px;
      }
      .dropdown-toggle1{
      background-color:black;
      margin-top: 10px;
      }
   </style>
   <script>
      function goToNextPage() {
          window.location.href="index3.php";
      }
      function openNewWindow(event) {
          event.preventDefault();
      }
   </script>
</head>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div>
         <label>
            <input type="checkbox">
            <div class="toggle">
               <span class="top_line common"></span>
               <span class="middle_line common"></span>
               <span class="bottom_line common"></span>
            </div>
            <div class="sidebar" id="sidebar">
               <h3>SideBar</h3>
               <ul>
                  <li class="space"><a href="dashboard.php">DashBoard</a></li>
                  <div class="dropdown">
                     <button class="dropdown-toggle" type="button" data-toggle="dropdown">Student Info
                     <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu">
                        <li><a href="attendence.php">Attendence</a></li>
                     </ul>
                  </div>
                  <div class="dropdown">
                     <button class="dropdown-toggle1" type="button" data-toggle="dropdown">Admision Info
                     <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu">
                        <li><a href="studentinfo.php">Admission Login</a></li>
                        <!-- <li><a href="adm-all-data.php">Admission Data</a></li>
                           <li><a href="std-all-data.php">Admission Login Data</a></li> -->
                     </ul>
                  </div>
                  <div class="dropdown">
                     <button class="dropdown-toggle1" type="button" data-toggle="dropdown">Exam Info
                     <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu">
                        <li><a href="schedule.php">Exam Schedule</a></li>
                        <li><a href="register.php">Register Course</a></li>
                        <li><a href="card.php">Admit Card</a></li>
                     </ul>
                  </div>
                  <div class="dropdown">
                     <button class="dropdown-toggle1" type="button" data-toggle="dropdown">Evaluation
                     <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu">
                        <li><a href="courseve.php">Course Evaluation</a></li>
                        <li><a href="teacheve.php">Teacher Evaluation</a></li>
                        <li><a href="almuni.php">Almuni Form</a></li>
                        <!-- <li><a href="almuni-data.php">Almuni Form Data</a></li> -->
                     </ul>
                  </div>
                  <div class="dropdown">
                     <button class="dropdown-toggle1" type="button" data-toggle="dropdown">Accounts
                     <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu">
                        <li><a href="feeledger.php">Fee Ledger</a></li>
                        <li><a href="feevoucher.php">Generate Fee Voucher</a></li>
                     </ul>
                  </div>
               </ul>
               <div class="form-group2">
                  <input type="button" value="Logout" class="form-control btn btn-primary" id="btnHome" onclick="goToNextPage(event)"/>
               </div>
            </div>
         </label>
      </div>
   </body>
</html>