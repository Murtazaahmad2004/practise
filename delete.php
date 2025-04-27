<?php
   include "dbconnection.php";
   
   $id = $_GET['id'];
   $sql = "DELETE FROM std_info WHERE `Id` = '$id'";
   $data = mysqli_query($conn,$sql);
   
   if($data){
       header('location: std-all-data.php');
   } else{
       echo "Record Has Not Deleted";
   }
   
   ?>