<?php
include "dbconnection.php";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email =$_POST["email"];
$address = $_POST["address"];
$phone_number =$_POST["phone_number"];
$sql = "INSERT INTO student (firstname, lastname, email,address,phone_number)
VALUES ('$firstname', '$lastname', '$email','$address','$phone_number')";

$conn->query($sql);