<?php 
   session_start();   

if(isset($_POST['submit-add'])){
    $servername = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBName = "users";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
die("connection failed: ".mysqli_connect_error());
}

    $track = $_POST['track'];
    $strand = $_POST['strand'];
    $sem = $_POST['sem'];
    $grade = $_POST['grade'];
    $coreapp = $_POST['coreapp'];
    $subjcode = $_POST['subjcode'];
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];


    $sql = "INSERT INTO prospectus (track, strand, sem, grade, coreapp, subjcode, subject, hours) VALUES ('$track', '$strand', '$sem', '$grade', '$coreapp', '$subjcode', '$subject', '$hours')";
  
 
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    

}

if (isset($_GET['delete'])){

    $id = $_GET['delete'];
    $sql2 = "DELETE FROM prospectus WHERE id=$id";

    if (mysqli_query($conn, $sql2)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}