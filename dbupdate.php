<?php
include "dbconnection.php";
$sql = "UPDATE student SET lastname='poudel' WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}