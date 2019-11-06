<!DOCTYPE html>
<html>
<body>
    <div id=answer></div>
        Enter a number:<input type="text" id="num" name="num" max-length="4"><br> <br>
        <!-- second number:<input type="text" id="second" max-length="4"><br> <br> -->
        <button onclick="myFunction()">Try it</button> <br> <br>
        <!-- result:<input type="text" id="answer" max-length="4"><br> -->
        
        <script type="text/javascript">
            function myFunction(){
                var num = document.getElementById('num').value;
                var c = 0;
                for (i = 1; i <= num; i++) {
                    if (num % i == 0) {
                        c = c + 1;
                    }
                }
                if (c == 2) {
                    document.getElementById("answer").innerHTML = num + ' is a Prime number';
                }else{
                    document.getElementById("answer").innerHTML = num + ' is NOT a Prime number';
                }
            }
        </script>
</body>
</html>