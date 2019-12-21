<?php
include "dbconnection.php";
$sql = "UPDATE student SET lastname='ghimire' WHERE id=4";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}