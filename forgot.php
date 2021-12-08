
<?php
session_start();
include 'includes/db.php';
if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}

$new_pass= $_POST['new_pass'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
 
$A = " select * from admin where username='$username' && email='$email' && address='$address' ";

$A_res = mysqli_query($con, $A);

$A_num = mysqli_num_rows($A_res);

$C = " select * from company where username='$username' && email='$email' && address='$address' ";

$C_res = mysqli_query($con, $C);

$C_num = mysqli_num_rows($C_res);

$S = " select * from student where username='$username' && email='$email' && address='$address' ";

$S_res = mysqli_query($con, $S);

$S_num = mysqli_num_rows($S_res);



    if($A_num >0 && $usertype!='student' && $usertype!='company')
    {
        
        $q = "UPDATE admin SET pass='$new_pass'where email='$email'";
        $qy = mysqli_query($con,$q);
        header('location:login.php');
    }
    elseif($C_num >0 && $usertype!='student' && $usertype!='admin')
    {
    
        $q = "UPDATE company SET pass='$new_pass'where email='$email'";
        $qy = mysqli_query($con,$q);
        header('location:login.php');
    }
    elseif($S_num >0 && $usertype!='admin' && $usertype!='company')
    {
        
        $q = "UPDATE student SET pass='$new_pass'where email='$email'";
        $qy = mysqli_query($con,$q);
        header('location:login.php');
        
    } 

else{

    header('location:Wrong_details.php');
}

?>