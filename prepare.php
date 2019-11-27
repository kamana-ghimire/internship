<?php
include "dbconnection.php";
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);
$firstname = "kamana";
$lastname = "ghimire";
$email = "kamanaghimireo1gmail.com";
$stmt->execute();