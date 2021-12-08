<?php
session_start();
include 'includes/db.php';
if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}
$name =$_GET['name'];
$c_email= $_GET['c_email'];
$department = $_POST['department'];
$date = getdate(date("U"));// function to get current date & year 
$avg_class = $_POST['avg_class'];
$sex = $_POST['sex'];
$nationality = $_POST['nationality'];
$department = $_POST['department'];

    
$qy = " INSERT INTO `request`(`name`, `sex`, `avg_class`, `department`, `nationality`, `status`, `date`)VALUES ('$name', '$sex', '$avg_class', '$department', '$nationality', 'hold','$date[month],$date[year]')";
    mysqli_query($con, $qy);

    header('location:company.php');
?>