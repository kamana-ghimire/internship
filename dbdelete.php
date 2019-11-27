<?php
include "dbconnection.php";
$sql = "DELETE FROM student WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}