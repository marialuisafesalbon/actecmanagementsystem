<?php
session_start();


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/student.css">
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
        <a class="nav-link active" href="student.php">Home</a>
      </li>
		
      <li class="nav-item">
        <a class="nav-link" href="clearance.php">Clearance</a>
      </li>
		
		 <li class="nav-item">
        <a class="nav-link" href="evaluation.php">Evaluation</a>
      </li>
		
		 <li class="nav-item">
        <a class="nav-link" href="assessment.php">Assessment</a>
      </li>
		 <li class="nav-item">
        <a class="nav-link" href="payment.php">Payment</a>
      </li>
	
    </ul>
  
   
      <button class="btn login btn-primary my-2 my-sm-0" type="submit"><a href="index.php">Logout</a></button>
		
		</div>
	  </nav>
	  <div class="media">
  <img src="img/userimage.png" class="userimage rounded" alt="...">
  <div class="media-body">
     <?php
	  
	  require 'includes/student.inc.php';
	  ?>
  </div>
</div>
	  
	
	  
	  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	  
	  <footer class="bg-info"><h6>&copy; Copyright 2019 www.acteccaloocan.com</h6></footer>

  </body>
	
	
	
</html>