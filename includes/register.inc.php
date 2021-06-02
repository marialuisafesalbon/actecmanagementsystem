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

    if (empty($lrn) || empty($surname) || empty($first) || empty($middle) ||  empty($gender) || empty($contactNumber) || empty($email) || empty($password) || empty($confirmPassword) ) {
header("Location: ../register.php?error=emptyfields&lrn=".$lrn. "&mail=".$email);  
exit();
}

else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $lrn)) {
    header("Location: ../register.php?error=invalidmail=".$email);  
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../register.php?error=invalidmail&lrn=".$email);  
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $lrn)) {
    header("Location: ../register.php?error=invalidmail&mail=".$email);
    exit();
}
else if ($password !== $confirmPassword) {
    header("Location: ../register.php?error=passwordcheck&lrn=".$lrn. "&mail=".$email); 
}

else {
    $sql = "SELECT email FROM student_registration WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../register.php?error=sqlerrorr"); 
        exit();
}
else {
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
$resultCheck = mysqli_stmt_num_rows($stmt);

if ($resultCheck > 0) {
    header("Location: ../register.php?error=usertaken&mail=".$email); 
    exit();
}
else{

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
    header("Location: ../student.php?signup=success"); 
    exit();

}
}
}
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../register.php"); 
    exit();
}
