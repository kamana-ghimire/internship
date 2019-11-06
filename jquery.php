<!doctype html>
<html>
<head></head>
<style>
  .error{
    color: red;
  }
  </style>
<body>
<form id="basic-form" action="" method="post">
    <p>
      <label for="name">Name <span>(required, at least 3 characters)</span></label>
      <input id="name" name="name" minlength="3" type="text" required>
    </p>
    <p>
      <label for="email">E-Mail <span>(required)</span></label>
      <input id="email" type="email" name="email" required>
    </p>
    <p>
      <input class="submit" type="submit" value="SUBMIT">
    </p>
</form>
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
      age: {
        required: true,
        number: true,
        min: 18
      },
      email: {
        required: true,
        email: true
      },
      weight: {
        required: {
          depends: function(elem) {
            return $("#age").val() > 50
          }
        },
        number: true,
        min: 0
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
  age: {
    required: "Please enter your age",
    number: "Please enter your age as a numerical value",
    min: "You must be at least 18 years old"
  },
  email: {
    email: "The email should be in the format: abc@domain.tld"
  },
  weight: {
    required: "People with age over 50 have to enter their weight",
    number: "Please enter your weight as a numerical value"
  }
}
</body>
</html>


    
