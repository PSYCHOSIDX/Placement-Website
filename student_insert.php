<?php

session_start();
include 'includes/db.php';
if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}


$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$rollno = $_POST['rollno'];
$department = $_POST['department'];
$address = $_POST['address'];

$val = $_POST['pass'];
$pass = hash('sha256',$val);

$avg_class = $_POST['avg_class'];
$sex = $_POST['sex'];
$nationality = $_POST['nationality'];
$department = $_POST['department'];

$_SESSION['username']=$username;
$q = "select rollno from student where rollno=$rollno" ;
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num > 0)
{
    header('location:exist_student.php');
}
else {
$qy =" INSERT INTO student(username, pass, sex, name, email, address, rollno, nationality, avg_class, department, usertype, state) VALUES ('$username', '$pass','$sex', '$name', '$email', '$address', '$rollno','$nationality', '$avg_class', '$department', 'student', 'active')";
   
mysqli_query($con,$qy);

    header('location:login.php');
}
?>