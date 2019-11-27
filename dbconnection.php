<?php
$hostname ="localhost";
$username ="root";
$password ="";
$dbname   ="database";

//procedure process
// $conn = new mysqli_connect($hostname, $username,$password,$dbname);


//object oriented
$conn =new mysqli($hostname, $username,$password,$dbname);