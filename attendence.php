<!DOCTYPE html>
<html>
   <head>
      <title>Attendence</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.css" />
      <link rel="stylesheet" href="styles.css" />
      <style>
         .box-title{
         background-color:black;
         width: 12%;
         color: aliceblue;
         }
         .card3 {
         text-align: left;
         margin-left: 25%;
         margin-top: 5%;
         }
         .table-responsive{
         width: 70%;
         }
      </style>
   </head>
   <body>
      <div>
         <?php include 'sidebar.php'?>
         <?php include 'navbar2.php'?>
      </div>
      <div class="card3">
         <h3 class="box-title">Attendence:</h3>
         <div class="table-responsive">
            <table class="table profile_table" border="5">
               <tbody>
                  <tr>
                     <td>Data Structure(Theory):</td>
                     <td>100%</td>
                  </tr>
                  <tr>
                     <td>Data Structure(Lab):</td>
                     <td>92%</td>
                  </tr>
                  <tr>
                     <td>Intro To Software Engeerning:</td>
                     <td>65%</td>
                  </tr>
                  <tr>
                     <td>Operating System(Theory):</td>
                     <td>77%</td>
                  </tr>
                  <tr>
                     <td>Operating System(Lab)</td>
                     <td>75%</td>
                  </tr>
                  <tr>
                     <td>Principle Of Economics And Management:</td>
                     <td>64%</td>
                  </tr>
                  <tr>
                     <td>IT Depth-Elective(Theory):</td>
                     <td>60%</td>
                  </tr>
                  <tr>
                     <td>IT Depth-Elective(Lab):</td>
                     <td>77%</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </body>
</html>