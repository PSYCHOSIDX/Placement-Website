<?php

session_start();

include 'includes/db.php';

if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}


$_SESSION['username']= $_POST['username'];


$username = $_POST['username'];
$val = $_POST['pass'];
$pass = hash('sha256',$val);
 
$A = " select * from admin where username='$username' && pass='$pass' ";

$A_res = mysqli_query($con, $A);

$A_num = mysqli_num_rows($A_res);

$C = " select * from company where username='$username' && pass='$pass' ";

$C_res = mysqli_query($con, $C);

$C_num = mysqli_num_rows($C_res);

$S = " select * from student where username='$username' && pass='$pass' ";

$S_res = mysqli_query($con, $S);

$S_num = mysqli_num_rows($S_res);



    if($A_num >0 && $usertype!='student' && $usertype!='company')
    {
        header('location:admin.php');
    }
    elseif($C_num >0 && $usertype!='student' && $usertype!='admin')
    {
        header('location:company.php');
    }
    elseif($S_num >0 && $usertype!='admin' && $usertype!='company')
    {
        header('location:student.php');
    } 

else{
    header('location:login.php');
}

?>