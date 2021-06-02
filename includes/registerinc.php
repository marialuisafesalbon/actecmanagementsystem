<?php
    
if(isset($_POST['register-submit'])){

    require 'dbh.inc.php';

    $lrn = $_POST['lrn'];
    $surname = $_POST['surname'];
    $first = $_POST['firstname'];
    $middle = $_POST['middlename'];
	$gender = $_POST['gender'];
	$contactNumber = $_POST['contact_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
	
	$sql = "INSERT INTO student_registration (lrn, surname, firstname, middlename, gender, contact_number, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../register.php?error=sqlerror"); 
    exit();
}
else {

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "ssssssss",  $lrn, $surname, $first, $middle, $gender, $contactNumber, $email, $hashedPwd );
    mysqli_stmt_execute($stmt);
    header("Location: ../register.php?signup=success"); 
    exit();

}
	
	 mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../register.php"); 
    exit();
}
