<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Document</title>
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
  }
  </style>
</head>
<body>
        <div class="container-fluid">
            <div class="p-3 md-2 text-white">
                <img src="picture/color2.jpg"style="width:100%;height:100%;">
            </div>
        </div>    

    <div class="card" style="width:640px;margin-left:365px;margin-top:-765px;background-color:white;height:36rem;">

	<form id="basic-form" action="" method="post">

        <h1 style=margin-left:9rem;margin-top:15px;>CREATE ACCOUNT</h1><br>

		
			<input type="text" id="name" placeholder="Name" name="name" style="margin-left:4rem;width:75%;"><br><br><br>
		
		
			<input type="email" id="email" placeholder="Email" name="email" style="margin-left:4rem;width:75%;"><br><br><br>
        
        
			<input type="password" id="password" placeholder="Password" name="password" style="margin-left:4rem;width:75%;"><br><br><br>
	
        
            <input type="password" id="repassword" placeholder="Confirm Password" name="repassword" style="margin-left:4rem;width:75%;"><br><br><br>
            
            <input type="checkbox" name="en" value="en" checked style="margin-left:4rem;" /><span> I agree all statements in <u>Terms of Services</u></span style="margin-left:4rem;"><br><br>
			<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" style="margin-left:4rem;width:75%;color:#fff;">SIGN UP</button><br>
		
			<!-- <input class="submit" type="submit" value="SIGN UP" style="margin-left:4rem;width:75%;background-color:cadetblue;font-size:15pt;font-weight:bold;"> -->
        
			<a href="#" class="forgot-password"style ="margin-left:4rem;"><br>
                Have already an account?<u>Login here</u>
            </a>
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
                    password: {
						required: true,
						minlength: 8
					},
                    repassword: {
						required: true,
						minlength: 8
					},
				},
				messages : {
					name: {
						minlength: "Name should be at least 3 characters"
					},
					email: {
						email: "The email should be in the format: abc@domain.tld"
					},
                    password: {
						// required: "Please enter your password",
						minlength: "Password should be at least 8 characters"
					},
                    repassword: {
						// required: "Again enter your password",
						minlength: "Name should be at least 8 characters"
					},
				}
			});
		});
	</script>
</body>
</html>