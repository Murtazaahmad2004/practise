<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Nav Bar</title>
      <style>
         .header{
         background-color:green;
         width: 100%;
         height: 50px;
         top: 0px;
         position: fixed;
         z-index: 2;
         font-size: 25px;
         text-align: center;
         }
         .containerD{
         background-color:grey;
         top: 50px;
         width: 100%;
         height: 30px;
         position: fixed;
         z-index: 2;
         }
         .containerS{
         background-color:brown;
         margin-top: 50px;
         width: 70%;
         height: 50px;
         margin-left: 335px;
         z-index: 2;
         color: aliceblue;
         font-size: 15px;
         }
         .labeld{
         margin-left: 12%;
         }
         .labeled{
         margin-left: 1125px;
         }
      </style>
   </head>
   <body>
      <div class="header">
         <label>Student Management System!</label>
      </div>
      <div class="containerD">
         <label class="labeld">DashBoard</label>
         <label class="labeled">Home/DashBoard</label>
      </div>
      <div class="containerS">
         <p>Kindly be informed that, starting from May, 2024 a late fee of 1000 rupees will be added to any outstanding transport fees for Hamdard University on 16th of every month.", "We kindly request all students to ensure timely payment to avoid this additional charge.</p>
      </div>
   </body>
</html>