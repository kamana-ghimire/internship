<?php 
$student = $_GET["id"];
echo $student;
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<div class="jumbotron jumbotron-fluid" style="background-color: antiquewhite;">
    <div class="container">
        <form action="dbinsertdata.php" method = "POST">
        First name:<br>
            <input type="text" name="firstname" value="">
            <br><br>
        Last name:<br>
            <input type="text" name="lastname" value="">
            <br><br>
        email:<br>
            <input type="text" name="email" value="">
            <br><br>
        address:<br>
            <input type="text" name="address" value="">
            <br><br>
        phone_number:<br>
            <input type="text" name="phone_number" value="">
            <br><br>
            <input type="submit" value="Submit">
        </form> 
    </div>
</div>

</body>
</html>