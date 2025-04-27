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
         background-color:aliceblue;
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
         .label{
         margin-left: 12%;
         color: black;
         font-size: medium;
         }
      </style>
   </head>
   <body>
      <div class="header">
         <label>Student Management System!</label>
      </div>
      <div class="containerD">
         <label class="label"> Attendence Inquiry</label>
      </div>
   </body>
</html>