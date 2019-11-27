<?php
$hostname ="localhost";
$username ="root";
$password ="";
$dbname   ="database";

//procedure process
// $conn = new mysqli_connect($hostname, $username,$password,$dbname);


//object oriented
$conn =new mysqli($hostname, $username,$password,$dbname);
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
    )";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    