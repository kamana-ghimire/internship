<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>JavaScript Form Validation using a sample registration form</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
<link rel='stylesheet' href='js-form-validation.css' type='text/css' />
<script src="sample-registration-form-validation.js"></script>
</head>
<body onload="document.registration.userid.focus();">
<h1>Registration Form</h1>
<form name='registration' onSubmit="return formValidation();">
<input type="text"placeholder="Your Name" name="username" size="50" /><br><br>
<input type="text"placeholder="Your Password" name="password" size="50" /><br><br>
<input type="text"placeholder="Your Email" name="email" size="50" /><br><br>

<input type="checkbox" name="en" value="en" checked /><span>I agree all statements in Terms of Services</span><br><br>
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>