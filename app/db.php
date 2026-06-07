<?php
$host = "db1";     // Docker service name
$user = "root";
$password = "password123";
$database = "database1";

$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
?>