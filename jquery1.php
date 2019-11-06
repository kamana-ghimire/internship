<!doctype html>
<html>
<head>
<title>jquery</title>
</head>
<body>
    <p id ="user1">hello world</p>
    <button id ="user3">click</button>
    <button id ="user">click</button>
    <button id ="user1">mouseentered</button>
    <p id ="03">javascript</p>
    <button id ="02">hide</button>
    <button id ="04">show</button>

    <script
        src="http://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
        <script>
            $(document).ready(function(){
            console.log("jquery started");
        });
        $("#user").click(function(){
            console.log("clicked");
        });
        $("#user1").click(function(){
            console.log("mouseentered");
        });
        $("#user3").click(function(){
        $("#user1").css("color","red");
        });
        $("#02").click(function(){
        $("#03").hide();
        });
        $("#04").click(function(){
        $("#03").show();
        });



    </script>
</body>
<html>