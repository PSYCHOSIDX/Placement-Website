<?php
session_start();
include 'includes/db.php';
$email=$_GET['email'];
if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}

$username = $_SESSION['username'];
$state = $_POST['state'];


$q = "DELETE from contact WHERE email='$email'";
$qy = mysqli_query($con,$q);


header('location:view_contact.php');