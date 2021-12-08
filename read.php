<?php
session_start();
include 'includes/db.php';
$no = $_GET['no'];

if($con)
{
    echo" connection successful";
}else{
    echo"no connection";
}

$q = "UPDATE contact SET state='read' where no='$no' ";
$qy = mysqli_query($con,$q);


header('location:view_contact.php');