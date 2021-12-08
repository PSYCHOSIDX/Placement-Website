<?php
session_start();
include 'includes/db.php';

if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}


$name = $_POST['username'];
$pass = $_POST['pass'];
$usertype = $_POST['usertype'];

// Redirection to student and company sign up  based on data submitted in form on Signup page
$q = "select * from  admin,student,company where username='$name' && pass='$pass'";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"user exists";
}

else
{
     if($_SESSION['usertype']= $usertype=='admin') 
    {
    header('location:admin_sign.php');
     }
      elseif($_SESSION['usertype']= $usertype=='student')
    {
     header('location:student_sign.php');
    }
  elseif($_SESSION['usertype']= $usertype=='company')
    {
     header('location:company_sign.php');
    }

}

?>