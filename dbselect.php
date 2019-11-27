<?php
include "dbconnection.php";
$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);
echo "<pre>";
while ($row = $result->fetch_assoc()){
    echo "name=".$row["firstname"]."<br";

}