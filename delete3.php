<?php
   include "dbconnection.php";
   
   $id = $_GET['id'];
   $sql = "DELETE FROM almuni_form WHERE `Std Id` = '$id'";
   $data = mysqli_query($conn,$sql);
   
   if($data){
       header('location: almuni-data.php');
   } else{
       echo "Record Has Not Deleted";
   }
   ?>