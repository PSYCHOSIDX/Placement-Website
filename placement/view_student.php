<html>

<!DOCTYPE html>

<!-- Home Page-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--styles & Scripts-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>PLACEMENT MANAGEMENT APV</title>
</head>
<?php 
session_start();

include 'includes/db.php';

$x=$_SESSION['username'];

if(isset($x))
{}
else{ echo"No Profile Viewed !! ";}


//student
$s = "select * from  student where username='$x'";
$s_result = mysqli_query($con, $s);

?>
<!-- student profile  -->
<div class="card bg-dark border border-warning" style="width: 22rem; border-radius:7px;">
            <img src="images/student.svg" class="card-img-top  mt-3 " style="width:13rem;margin-left:4rem;" alt="Profile PIC">

            <div class="card-body " style="border-radius:7px">
            <h5 class="card-title text-center " style="color: rgb(129, 28, 224); font-size:30px;">PROFILE DETAILS</h5>
            <p class="card-text mb-3 ">
           
            <?php
while($row = mysqli_fetch_array($s_result))
{
?>

<h5 style="color:white; font-size:17px">NAME - <?php echo $row['name'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">EMAIL - <?php echo $row['email'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">GENDER - <?php echo $row['sex'];?></ h5>
<br>

 <h5 style="color:white; font-size:17px">ADDRESS -<?php echo $row['address'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">ROLL NO - <?php echo $row['rollno'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">NATIONALITY - <?php echo $row['nationality'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">DEPARTMENT - <?php echo $row['department'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">AVERAGE CLASS - <?php echo $row['avg_class'];?></ h5>
<br>
<h5 style="color:white; font-size:17px">STATE -<?php echo $row['state'];?></ h5>
<br>
<a href="student_update_page.php?id=<?php echo $row['id'];?> " class="bt-login " style="margin-top:24px;"> UPDATE! </a>

<?php }
?>

</div>
</div>
</html>