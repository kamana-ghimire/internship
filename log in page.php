<! doctype html>
<html>
<head>
<title>log in</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
  .error{
    color: red;
    margin-left:4rem;
  }
  input:not(:placeholder-shown) {
  border-color: hsl(0, 76%, 50%);;
}

/* Show green borders when valid */
input:valid {
  border-color: hsl(120, 76%, 50%);
}
  </style>
</head>   
<body>
    <div class="container-fluid">
        <div class="p-3 md-2 text-white">
            <img src="picture/color2.jpg"style="width:100%;height:100%;">
        </div>
    </div>
    <div class="card" style="width:640px;margin-left:365px;margin-top:-558px;background-color:white;height:32rem;">
        <form id="basic-form" action="" method="post">
        <h1 style=margin-left:9rem;margin-top:6px;>CREATE ACCOUNT</h1><br>
        <p>
        <input id="name" name="name" placeholder="Your Name" minlength="3" type="text" required style="margin-left:4rem;width:75%;"><br><br>
        </p>
        <p>
        <input id="email" type="email" placeholder="Your Email" name="email" required style="margin-left:4rem;width:75%;"><br><br>
        </p>
        <p>
        <input id="password" type="password" placeholder="Your Password"minlength="8" name="password" required  style="margin-left:4rem;width:75%;"><br><br>
        </p>
        <p>
        <input id="password" type="password" placeholder="Confirm Password" minlength="8" name="password1" required  style="margin-left:4rem;width:75%;"><br><br>
        </p>
        <input type="checkbox" name="en" value="en" checked style="margin-left:4rem;" /><span>I agree all statements in Terms of Services</span style="margin-left:4rem;"><br><br>

        <p>
        <input class="SIGN UP" type="submit" value="SIGN UP"style="margin-left:4rem;width:75%;background-color:cadetblue;font-size:15pt;">
        </p>
        <p style="margin-top:2rem;margin-left: 9rem;"><b>Have already an account?<b> <b><u>Login here</u><b></p>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#basic-form").validate({
				rules: {
					name : {
						required: true,
						minlength: 3
					},

		
					email: {
						required: true,
						email: true
					},
                    password : {
						required: true,
						minlength: 8
					},
					
						number: true,
						min: 0
					}
				},
				messages : {
					name: {
						minlength: "Name should be at least 3 characters"
					},
					
					email: {
						email: "The email should be in the format: abc@domain.tld"
					},
                    password: {
						minlength: "password should be at least 8 characters"
					},
                }
					
				}
			});
		});
	</script>
</body>
</html> 
   

                            

