<?php

session_start();

include 'includes/db.php';
$x=$_SESSION['username'];


$name = $_POST['name'];
$email = $_POST['email'];
$designation = $_POST['designation'];
$address = $_POST['address'];

$q = " UPDATE company SET name='$name',email='$email',address='$address',designation='$designation'WHERE username='$x'";
$qy = mysqli_query($con,$q);

header('location:admin.php');



?>