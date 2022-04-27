<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "covidsymtracker";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to establish the connection". mysqli_connect_error());
}
?>