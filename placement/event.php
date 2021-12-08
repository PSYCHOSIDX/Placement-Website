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
$event = $_POST['event'];


$q = "UPDATE event SET event='$event'where id='0'";
$qy = mysqli_query($con,$q);


header('location:admin.php');