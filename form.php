<!doctype html>
<html>
<head>
    <title>survey form</title>
    <!-- <link href="custom.css" rel="stylesheet"> -->
    <style>
        body {
            /* background-color:yellow; */
            padding:50px;
            border:5px solid green;
            background-image:url('piza2.jpg');
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="action_page.php">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

            <label for="country">Country</label>
            <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            </select>

            <label for="subject">Subject</label><br>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br>

            <input type="submit" value="Submit">

        </form>
    </div>
</body>

</html>

