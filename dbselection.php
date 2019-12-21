<?php
    include "dbconnection.php";
    $sql = "SELECT id, firstname, lastname,email,address,phone_number FROM student";
    $result = $conn->query($sql);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>table</title>
</head>

<body>
    <table border="1px">
        <tr>
            <th>Firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>address</th>
            <th>phone_number</th>
            <th colspan="2">action</th>
        </tr>
        <?php foreach($result as $student): ?>
            <tr>
                <td><?php echo $student['firstname']?></td>
                <td><?php echo $student['lastname']?></td>
                <td><?php echo $student['email']?></td>
                <td><?php echo $student['address']?></td>
                <td><?php echo $student['phone_number']?></td>
                <td><a href="<?php echo 'form1.php?id='.$student['id']?>" class="button">Edit</a>
                </td>
                <td><a href="<?php echo $student['id']?>" class="button"></a><a href="database_form.php">Delete</a>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>


