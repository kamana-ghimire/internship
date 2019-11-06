 <!DOCTYPE html>
<html>
<body>
    <div id="demo"></div>
    
            type here:<input type="text" id="first" max-length="4"><br> <br>
            <!-- second number:<input type="text" id="second" max-length="4"><br> <br> -->
            <button onclick="myFunction()">Try it</button> <br> <br>
            result:<input type="text" id="answer" max-length="4"><br>


<script type="text/javascript">
function myFunction() {
        var x=document.getElementById("first").value;
   
    document.getElementById("answer").value=x;

}

</script>

</body>
</html>



