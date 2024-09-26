<?php

$servername="localhost";
$username= "root";
$password= "";
$dbname= "api_data";
$conn = mysqli_connect(hostname: $servername, username: $username, password: $password, database: $dbname);
if (!$conn) {
    die("connection id failed");
}

?>