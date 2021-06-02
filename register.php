<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/main.css">
	  	    <link rel="stylesheet" href="css/all.css">
	    <link rel="stylesheet" href="css/fontawesome-free-5.9.0-web/css/all.css">
	  <script defer src="css/fontawesome-free-5.9.0-web/js/all.js"></script>
	  

	  
	  
	  

    <title>ACTEC Enrollment System</title>
  </head>
	
	
  <body>
    <!-- navigation -->
	<nav class="navbar navbar-expand-lg bg-info">
  <a class="navbar-brand">ACTEC - Caloocan Branch</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
		
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
		
		 <li class="nav-item">
        <a class="nav-link" href="courseinfo.php">Course Information</a>
      </li>
		
		 <li class="nav-item">
        <a class="nav-link" href="inquire.php">Inquire</a>
      </li>
    </ul>
  
   
	  <button class="btn register btn-primary my-2 my-sm-0" type="submit"><a href="login.php">Login</a></button>

		</div>
	  </nav>
	  
	<form class="container register needs-validation" novalidate action="includes/register.inc.php" method="POST" >

		
		
		
		<div class="form-group row">
    <label for="validationCustom01" class="col-sm-2 col-form-label">LRN</label>
    <div class="col-sm-10">
      <input type="number" name="lrn" class="form-control" id="validationCustom01" placeholder="Enter your LRN" required>
		<div class="invalid-feedback">
          Please put your LRN.
        </div>
	
<div class="valid-feedback">
        Looks good!
      </div>

    </div>
  </div>
		
		 <div class="form-group row">
    <label for="validationCustom02" class="col-sm-2 col-form-label">Full name</label>
  
      <input type="text" name="surname" class="form-control fullname" id="validationCustom02" placeholder="Surname" required>

	
      <input type="text" name="firstname" class="form-control fullname" id="validationCustom02" placeholder="Firstname" required>
		

      <input type="text" name="middlename" class="form-control fullname" id="validationCustom02" placeholder="Middlename" required>
		<div class="invalid-feedback">
          Please put your complete name.
        </div>
<div class="valid-feedback">
        Looks good!
      </div>

			 
  </div>
		
  
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0" >Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" name="gender" type="radio" name="gridRadios" id="validationCustom03" value="Female" checked required>
          <label class="form-check-label" for="validationCustom03">
            Female
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="gender" type="radio" name="gridRadios" id="validationCustom04" value="Male" required>
          <label class="form-check-label" for="validationCustom04">
            Male
          </label>
			
        </div>
        
      </div>
    </div>
	  <div class="form-group row">
    <label for="validationCustom05" class="col-sm-2 col-form-label">Contact number</label>
    <div class="col-sm-10">
      <input type="number" name="contact_number" class="form-control" id="validationCustom05" placeholder="Enter you Contact number" required>
		<div class="invalid-feedback">
          This is required.
        </div>
<div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  </fieldset>
  <div class="form-group row">
    <label for="validationCustom06" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="validationCustom06" placeholder="Email" required>
		<div class="invalid-feedback">
          Please type in your valid email address.
        </div>
<div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="validationCustom07" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="validationCustom07" placeholder="Password" required>
		<div class="invalid-feedback">
          Please type in your valid email address.
        </div>
<div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
		 <div class="form-group row">
    <label for="validationCustom08" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" name="confirm_password" class="form-control" id="validationCustom08" placeholder="Password" required>
		<div class="invalid-feedback">
          Please type in your valid email address.
        </div>
<div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
	
  <div class="form-group">
    <label for="validationCustom09">Upload Picture</label>
	     <div class="col-sm-10">
    <input type="file" name="student_picture" class="uploadpic" id="validationCustom09">
  </div>
			</div>


  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to <a class="blue" href="terms.php">Terms and Conditions.</a>
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" name="register-submit"  type="submit">Register</button>



  
	  </form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	   <footer class="bg-info"><h6>&copy; Copyright 2019 www.acteccaloocan.com</h6></footer>

  </body>
	
	
	
</html>