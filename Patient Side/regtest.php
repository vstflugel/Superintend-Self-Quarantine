<?php
// include database connection file
include_once("connection.php");

// Get id from URL to delete that user
$hospital_name = $_GET['hospital_name'];
$aadhar = $_COOKIE["user_name"];
$date = $_COOKIE["date_v"];
$data="true";


$result = mysqli_query($conn, "INSERT INTO covid_test (hospital_name,aadhar,date,hospital_selected) VALUES ('$hospital_name','$aadhar','$date','$data');");


// After delete redirect to Home, so that latest user list will be displayed.
header("Location:main.html");
?>