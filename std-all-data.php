<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Student Data</title>
      <style>
         .btn-primary{
         background-color:darkblue;
         }
         .btn-danger{
         background-color:darkred;
         }
         .btn-primary a{
         color:aliceblue;
         }
         .btn-danger a{
         color:aliceblue;
         }
         th{
         padding-top: 10px;
         padding-bottom: 20px;
         padding-left: 30px;
         padding-right: 40px;
         }
      </style>
   </head>
   <body>
      <table border="10" align="center">
         <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Password</th>
            <th>Operation</th>
         </tr>
         <?php
            include "dbconnection.php";
             
            $query = "SELECT * FROM std_info";
            $data = mysqli_query($conn,$query);
            $result = mysqli_num_rows($data);
            
            if($result!=0){
                while (($total = mysqli_fetch_assoc($data))){
                    $id = $total['Std Id'];
                    echo "
                    <tr>
                    <td>".$total['Std Id']."</td>
                    <td>".$total['Email']."</td>
                    <td>".$total['Password']."</td>
                    <td>
                    <button class='btn btn-primary'><a href='update.php?id=$id'>Edit/Update</a></button>
                    <button class='btn btn-danger'><a href='delete.php?id=$id'>Delete</a></button>
                    </td>
                    </tr>
                    ";
                }
            }else {
                echo"No records found.";
            }
            ?>
      </table>
   </body>
</html>