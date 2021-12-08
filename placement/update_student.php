<?php

session_start();

include 'includes/db.php';
$x=$_SESSION['username'];



$name = $_POST['name'];
$pass =$row['pass'];
$email = $_POST['email'];
$rollno = $_POST['rollno'];
$department = $_POST['department'];
$avg_class = $_POST['avg_class'];
$address = $_POST['address'];
$sex = $_POST['sex'];
$nationality = $_POST['nationality'];

$q = " UPDATE student SET name='$name',pass='$pass',sex='$sex',email='$email',address='$address',rollno='$rollno',nationality='$nationality',avg_class='$avg_class',department='$department' WHERE username='$x'";
$qy = mysqli_query($con,$q);

header('location:admin_student.php');



?>