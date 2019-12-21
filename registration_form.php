<! doctype html>
<html>
<head>
<title>log in</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}
.invalid-feedback {

}

</style>
<!-- Add form -->
<div class ="picture">
<div class="container" style="padding-top: 40px;">
  <form class="student-search needs-validation" novalidate>
    <div class="form-row">
      <div class="form-group col-12">
        <div class="card" style="width:70%;margin-top:12px;">
        <h1 style="margin-left:12rem;">CREATE ACCOUNT</h1><br>
        <label for="input-name-search" class="sr-only">Name</label>
        <input type="text" class="form-control" id="input-name-search" placeholder="Name" style="width:82%;margin-left:4rem;" required><br>
        <div class="invalid-feedback" style="margin-left:70px;margin-top: -15px;">Enter a name please.</div>
        <label for="input-name-search" class="sr-only">Email</label>
        <input type="text" class="form-control" id="input-name-search" placeholder="Email" style="width:82%;margin-left:4rem;" required><br>
        <div class="invalid-feedback" style="margin-left:70px;margin-top: -15px;">Enter a email please.</div>
        <label for="input-name-search" class="sr-only">Password</label>
        <input type="text" class="form-control" id="input-name-search" placeholder="Password" style="width:82%;margin-left:4rem;" required><br>
        <div class="invalid-feedback" style="margin-left:70px;margin-top: -15px;">Enter a password please.</div>
        <label for="input-name-search" class="sr-only">repassword</label>
        <input type="text" class="form-control" id="input-name-search" placeholder="repassword" style="width:82%;margin-left:4rem;" required><br>
        <div class="invalid-feedback" style="margin-left:70px;margin-top: -15px;">Enter a password please.</div>
        <label for="input-name-search" class="sr-only">checkbox</label>
        <input type="checkbox" name="en" value="en" checked style="margin-left:4rem;"/><span style="margin-top:-20px;margin-left:83px;">I agree all statements in Terms of Services</span>
    
  
        <button id="btn-search" type="submit" class="btn btn-success btn-block" style ="margin-top: 2rem;width:83%;margin-left:4rem;">SIGN UP</button>
        <p style="margin-left:4rem;"><b>Have already an account?<b> <b><u>Login here</u><b></p>
      </div>
    </div>
  </form>
</div>
<script>
window.addEventListener('load', () => {

// Grab all the forms
var forms = document.getElementsByClassName('needs-validation');

// Iterate over each one
for (let form of forms) {

  // Add a 'submit' event listener on each one
  form.addEventListener('submit', (evt) => {
  
    // check if the form input elements have the 'required' attribute  
    if (!form.checkValidity()) {
      evt.preventDefault();
      evt.stopPropagation();
      console.log('Bootstrap will handle incomplete form fields');
    } else {
      // Since form is now valid, prevent default behavior..
      evt.preventDefault();
      console.info('All form fields are now valid...');
    }
    
    form.classList.add('was-validated');
    
  });
  
}

});
</script>