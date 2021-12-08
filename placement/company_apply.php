<?php
session_start();
include 'includes/db.php';
if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}


$username = $_SESSION['username'];
$state = $_POST['state'];


$q = "UPDATE company SET state='$state' WHERE username='$username'";
$qy = mysqli_query($con,$q);


header('location:company.php');