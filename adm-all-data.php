<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addmission Data</title>
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
    <table class="table" border="10" align="center">
    <tr>
        <th>Std Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Student CNIC</th>
        <th>Father Name</th>
        <th>Father CNIC</th>
        <th>Contact Number</th>
        <th>Address</th>
        <th>Province</th>
        <th>City</th>
        <th>Operation</th>
    </tr>
<?php

include "dbconnection.php";
 
$query = "SELECT * FROM addmission_info";
$data = mysqli_query(mysql: $conn,query: $query);
$result = mysqli_num_rows(result: $data);

if($result!=0){
    while (($total = mysqli_fetch_assoc(result: $data))){
        $id = $total['Std Id'];
        echo "
        <tr>
        <td>".$total['Std Id']."</td>
        <td>".$total['First Name']."</td>
        <td>".$total['Last Name']."</td>
        <td>".$total['Student CNIC']."</td>
        <td>".$total['Father Name']."</td>
        <td>".$total['Father CNIC']."</td>
        <td>".$total['Contact Number']."</td>
        <td>".$total['Address']."</td>
        <td>".$total['Province']."</td>
        <td>".$total['City']."</td>
        <td>
        <button class='btn btn-primary'><a href='update2.php?id=$id'>Update</a></button>
        <button class='btn btn-danger'><a href='delete2.php?id=$id'>Delete</a></button>
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