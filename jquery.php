<!doctype html>
<html>
<head></head>
<style>
  .error{
    color: red;
  }
  </style>
<body>
<div class="container-fluid">
        <div class="p-3 md-2 text-white">
            <img src="picture/color2.jpg"style="width:100%;height:100%;">
        </div>
    </div>
    <div class="card" style="width:640px;margin-left:365px;margin-top:-558px;background-color:white;height:32rem;">
<form id="basic-form" action="" method="post">
    <h1>CREATE ACCOUNT</h1><br>
    <p>
      <input id="name" name="name"placeholder="Your Name" minlength="3" type="text" required style="margin-left:2rem;">
    </p>
    <p>
      <input id="email" type="email" placeholder="Your Email" name="email" required>
    </p>
    <p>
      <input id="password" type="password" placeholder="Your Password"minlength="8" name="password" required>
    </p>
    <p>
      <input id="password1" type="password1" placeholder="Confirm Password" minlength="8" name="password1" required>
    </p>
    <input type="checkbox" name="en" value="en" checked /><span>I agree all statements in Terms of Services</span>

    <p>
      <input class="SIGN UP" type="submit" value="SIGN UP">
    </p>
</form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
//    $(document).ready(function() {
//       $("#myForm").validate();
//    });
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
        minlength=8
      },
      password1: {
        required: true,
        minlength=8
      }
    }
  });
});
</script>
<script>
messages : {
  name: {
    minlength: "Name should be at least 3 characters"
  },
  email: {
    email: "The email should be in the format: abc@domain.tld"
  },
    password: {
    password: "The email should be at least 8 characters"
  }
  password1: {
    password1: "The email should be at least 8 characters"
}
</body>
</html>


    
