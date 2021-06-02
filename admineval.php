<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/admin.css">
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
        <a class="nav-link" href="admin.php">Home</a>
      </li>
		
      <li class="nav-item">
        <a class="nav-link" href="adminclearance.php">Clearance</a>
      </li>
		
		 <li class="nav-item">
        <a class="nav-link active" href="admineval.php">Evaluation</a>
      </li>
		
		 <li class="nav-item">
        <a class="nav-link" href="adminassessment.php">Assessment</a>
      </li>
		 <li class="nav-item">
        <a class="nav-link" href="adminpayment.php">Payment</a>
      </li>
		 <li class="nav-item">
        <a class="nav-link" href="#">Users</a>
      </li>
		 <li class="nav-item">
        <a class="nav-link" href="#">Reports</a>
      </li>
    </ul>
  
   
      <button class="btn login btn-primary my-2 my-sm-0" type="submit">Logout</button>
		
		</div>
	  </nav>
	  
	  
	

	    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">Evaluation of Grades</li>
  </ol>
		
				
				<div class="container">
			<form  class="form-inline">
			<div class="form-group">
				<label class="col-sm-2 col-form-label">School Year</label>
					<div class="col-sm-10">
						<select class="form-control sy">
							<option value="2017-2018">2017-2018</option>
							<option value="2017-2018">2017-2018</option>
							<option value="2017-2018">2017-2018</option>
						</select>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Semester</label>
						<div class="col-sm-10">
							<select class="form-control">
								<option value="2017-2018">1st Semester</option>
								<option value="2017-2018">2nd Semester</option>
							</select>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Grade</label>
						<div class="col-sm-10">
							<select class="form-control">
								<option value="2017-2018">Grade 11</option>
								<option value="2017-2018">Grade 12</option>
							</select>
					</div>
				</div>
				
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Search</label>
							<div class="col-sm-10">
							<input class="form-control" type="text">
							</div>
					</div>
			
			</form>
				</div>
</nav>
	<table class="container table table-bordered">
  <thead>
    <tr class="table-info">
    
      <th scope="col">Student Number</th>
      <th scope="col">Student Name</th>
      <th scope="col">View</th>
		<th scope="col">Remarks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  
      <td>12345678</td>
      <td>Juan dela cruz</td>
      <td><i class="far fa-eye"></i></td>
		<td>....</td>
    </tr>
    <tr class="table-info">
     
      <td >123456778</td>
      <td>Juana Dela cruz</td>
        <td><i class="far fa-eye"></i></td>
		<td>....</td>
    </tr>
    <tr>

      <td>112233445</td>
      <td>Maria Fesalbon</td>
		   <td><i class="far fa-eye"></i></td>
		<td>....</td>
    </tr>
	   <tr class="table-info">
     
      <td >2019-2020</td>
      <td>2nd Semester</td>
       <td><i class="far fa-eye"></i></td>
		<td>....</td>
    </tr>
  </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	  
	  <footer class="bg-info"><h6>&copy; Copyright 2019 www.acteccaloocan.com</h6></footer>

  </body>
	
	
	
</html>