<?php

session_start();

include 'includes/db.php';

$x=$_SESSION['username'];


$name = $_POST['name'];
$email = $_POST['email'];
$specialization = $_POST['specialization'];
$description = $_POST['description'];
$address = $_POST['address'];
$website = $_POST['website'];

$q = " UPDATE company SET name='$name',email='$email',address='$address',specialization='$specialization',description='$description',website='$website'WHERE username='$x'";
$qy = mysqli_query($con,$q);

header('location:company.php');



?>