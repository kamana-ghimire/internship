<!doctype html>
<html>
<head>
    <title>form</title>
</head>
<body>  
    <form name="myForm" onsubmit="return validateForm()" method="post">
        Name:<input type ="text" id ="user1" name="name" required><br><br>
        E-mail:<input type ="text" id = "user2" name="e-mail"><br><br>
        <input type ="radio" name ="gender" id = "user3" value ="female">female
        <input type ="radio" name ="gender" id ="user4" value ="male">male
        <input type ="radio" name ="gender" id ="user5" value ="other">other<br><br>
        Website: <input type="text" id ="user6" name="website"><br><br>
        Comment: <textarea name="comment" rows="5" id = "user7" cols="40"></textarea><br><br>
        <input type="submit" value="Submit">

        <div id = "display"></div>
        
    </form>
    <script>
        function validateForm()
            {
                var x =document.form["myForm"]["name"].value;
                if (x == "") {
                    alert("name must be filled out");
                    return false;
                    document.getElementById(user1).value=x;
                    document.getElementById("display").innerHTML = x;
                    
                var x =document.form["myForm"]["e-mail"].value;
                if (x == "") {
                    alert("e-mail must be filled out");
                    return false;
                    document.getElementById(user2).value=x;
                    document.getElementById("display").innerHTML = x;
                var x =document.form["myForm"]["gender"].value;
                if (x == "") {
                    alert("gender must be filled out");
                    return false;
                    document.getElementById().value=x;
                 var x =document.form["myForm"]["website"].value;
                if (x == "") {
                    alert("website must be filled out");
                    return false;
                    document.getElementById().value=x;
                    var x =document.form["myForm"]["comment"].value;
                if (x == "") {
                    alert("comment must be filled out");
                    return false;
                    document.getElementById().value=x;    

                }

            }   
    </script>

</body>
</html>
