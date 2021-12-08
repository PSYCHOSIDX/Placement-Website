
<?php
session_start();
//connection To DB
include 'includes/db.php';


//variables submited from previous page 
$name = $_POST['name'];
$email = $_POST['email'];
$querry = $_POST['querry'];

$q = "select * from contact where name='$name' && email='$email' ";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"User already Contacted";
}else
{
    // Inserting The data in querry Table
    $qy = "insert into contact(name, email, querry ,state) values('$name', '$email','$querry','unread')";
   
    mysqli_query($con, $qy);
header('location:index.php'); // Redirect to home after running querry


}



?>