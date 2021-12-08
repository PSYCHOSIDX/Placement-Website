<?php
session_start();
include 'includes/db.php';
$id=$_GET['id'];
if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}

$username = $_SESSION['username'];
$state = $_POST['state'];


$q = "DELETE from student WHERE id='$id'";
$qy = mysqli_query($con,$q);


header('location:admin_student.php');