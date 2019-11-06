<!DOCTYPE html>
<html>
<body>
<!-- <div id="answer"> -->
    Enter a first number:<input type ="text"id="num1"  max-length="4"><br><br>
    Enter a second number:<input type ="text"id="num2"  max-length="4"><br><br>
    <input type ="button" value="add" onclick="myFunction(this.value)">
    <input type ="button" value="sub" onclick="myFunction(this.value)">
    <input type ="button" value="mul" onclick="myFunction(this.value)">
    <input type ="button" value="div" onclick="myFunction(this.value)">
    result:<input type="text" id="answer" name="answer">
        
    <script type="text/javascript">
    function myFunction(my_value){
        var= a,b,c;
        a =parseInt(document.getElementById("num1").value;
        b =parseInt(document.getElementById("num2").value;
        switch(my_value){
            case "add":
            c = a + b;
            document.getElementById(answer).value=c;
            break;

            case "sub":
                c = a- b;
                document.getElementById(answer).value=c;
                break;

            case "mul":
                c = a*b;
                document.getElementById(answer).value=c;
                break;
                
            case "div":
                c =a/b;
                document.getElementById(answer).value=c;
                break;
        }
                
                
        }
        </script>



