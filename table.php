  <?php
  include "dbconnection.php";
  $sql = "CREATE TABLE ajax (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    Phone VARCHAR(30),
    City VARCHAR(30)
    )";
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Table ajax created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }