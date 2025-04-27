<?php
   include "sidebar.php";
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
         body {
         font-family: Arial, sans-serif;
         }
         .container {
         width: 100%;
         display: flex;
         justify-content: center;
         margin-top: 2%;
         }
         .slip {
         border: 1px solid black;
         width: 800px;
         padding: 5px;
         }
         .h1 {
         margin-left: 15%;
         color: darkgreen;
         }
         .h3 {
         text-align: center;
         font-weight: bold;
         color: red;
         }
         .h4 {
         text-align: center;
         font-weight: bold;
         }
         .p1 {
         font-size: large;
         }
      </style>
   </head>
   <body>
      <h1 class="h1">Fee Ledger</h1>
      <div class="container">
         <div class="slip">
            <div class="header">
               <div class="left">
                  <h3 class="h3">Note! Fees Will Be Up & Down In Every Semester.</h3>
                  <h4 class="h4">Hamdard University Islamabad Campus</h4>
                  <p class="p1">1st Semester + Admission Fees(Only One Time):____________________ rs35000/- + rs15000/-</p>
                  <p class="p1">2nd Semester Fees:____________________ rs35000/-</p>
                  <p class="p1">3rd Semester Fees:____________________ rs34800/-</p>
                  <p class="p1">4th Semester Fees:____________________ rs35900/-</p>
                  <p class="p1">5th Semester Fees:____________________ rs40800/-</p>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>