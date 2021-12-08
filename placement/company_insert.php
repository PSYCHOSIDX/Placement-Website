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
$specialization = $_POST['specialization'];
$description = $_POST['description'];
$address = $_POST['address'];
$val = $_POST['pass'];
$pass = hash('sha256',$val);
$website = $_POST['website'];

$q = "select name from company where name='$name' ";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num >0)
{
    header('location:exist_company.php');
}

else
{
    $qy = "insert into company(username, pass, name, email, specialization, description, address, usertype, website) values('$username', '$pass', '$name', '$email', '$specialization','$description', '$address','company','$website')";
    mysqli_query($con, $qy);
}

?>