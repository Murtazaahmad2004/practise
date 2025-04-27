<?php
   include "dbconnection.php";
   
   $id = $_GET['id'];
   $sql = "DELETE FROM addmission_info WHERE `Std Id` = '$id'";
   $data = mysqli_query($conn,$sql);
   
   if($data){
       header('location: adm-all-data.php');
   } else{
       echo "Record Has Not Deleted";
   }
   
   ?>