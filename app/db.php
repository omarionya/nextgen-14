<?php
$host = "db";     // Docker service name
$user = "root";
$password = "password123";
$database = "containerdemo";

$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
?>