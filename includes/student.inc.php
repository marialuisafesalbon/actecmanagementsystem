<?php

require 'dbh.inc.php';



if (mysqli_connect_error()) {
    die("there is no connection");
    
}



    if($_SESSION['id'])
{
$SESSION = $_SESSION['id'];
$result = mysqli_query($conn, "select * from `student_registration` where 
`id` = '$SESSION'");
$row=mysqli_fetch_assoc($result);
		
		
   echo "LRN: ".$row['lrn'];
   echo "<br>";
   echo "Name: ".$row['firstname']." ".$row['middlename']." ".$row['surname'];
   echo "<br>";
   echo "Email: ".$row['email'];
   
}
?>
