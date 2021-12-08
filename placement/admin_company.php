<?php 
session_start();
include ('includes/db.php');
error_reporting(E_ERROR);
$x=$_SESSION['username'];

$id=$_GET['id'];

if(isset($x))
{}
else{ header('location:index.php');}

//company
$c = "select * from company";
$c_result = mysqli_query($con, $c);


?>

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
<body>

    <!-- NAV BAR -->
    <style> h4{color:white}</style>
    <nav class="navbar navbar-expand-lg " id="navbar-id">
  <h4 class="ml-3">P L A C E M E N T</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="nav-collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="about.php" >About Us</a></li>
        <li><a class="nav-link btn btn-light m-1" style="color:black;" href="admin.php">sid </a>

      </li>
      <li> <a class="nav-link btn btn-primary" href="logout.php"> LOGOUT </a></li>
    </ul>
  </div>
</nav>
        <!-- Content Section -->
        <section id="content">

        <div class="container  ">

        <div class="row">
        
        <div class="col-12 col-md-6  col-lg-7 left-side tex-center  ">
       
<!-- student table  -->
<h1 class="bt-login">COMPANY LIST</h1>
        <table class="table   table-dark mr-1 mt-1 table-bordered table-responsive-sm table-responsive-md table-responsive-lg "  style=" border-radius:9px;">
<tr>
    <thead  class="thead bg-dark ">
    <th scope="col">NAME</th>
    <th scope="col" >STATUS</th>
    <th scope="col">SPECIALIZATION</th>
    <th colspan="2">OPERATIONS</th>
    </thead>
</tr>

<?php
while($row = mysqli_fetch_array($c_result))
{
?>
<tbody>
<tr class="bg-secondary border border-light">
<td scope="row"><?php echo $row['name'];?></td>
<td scope="row" class="bg-secondary"><?php echo $row['state']?></td>
<td scope="row"> <?php echo $row['specialization']?></td>
<td scope="row" class="btn btn-danger m-1" ><a href="delete_com.php?id=<?php echo $row['id']?>" style="color:white;" >Delete</a></td>
<td scope="row"  class="btn btn-primary m-1" ><a href="?id=<?php echo $row['id']?>" style="color:white;">VIEW</a></td>
</tr>
<?php

}

?>
</tbody>
</table>
<a class="btn btn-primary" href="excel_admin_c.php?export=true">EXPORT TO EXCEL</a>
        </div>
<br>

        <!-- right side -->
        
        
        <div class=" col-12 col-md-6 col-lg-5 right-side">
             
<!--ACTIVE Frame Section -->
<?php 

//company
$cv = "select * from  company where id='$id'";
$cv_result = mysqli_query($con, $cv);

?>

<div class="card bg-dark border ml-1" style="width: 24rem; border-radius:7px;">
            <img src="images/company_img.svg" class="card-img-top  mt-3 " style="width:13rem;margin-left:5rem;" alt="Profile PIC">

            <div class="card-body " style="border-radius:7px">
            <h5 class="card-title text-center " style="color: rgb(129, 28, 224); font-size:30px;">PROFILE DETAILS</h5>

           
            <?php
while($row = mysqli_fetch_array($cv_result))
{
?>

<h5 style="color:white; font-size:17px">NAME - <?php echo $row['name'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">EMAIL - <?php echo $row['email'];?></ h5>
<br>

 <h5 style="color:white; font-size:17px">ADDRESS -<?php echo $row['address'];?></ h5>
<br>

<h5 style="color:white; font-size:17px" class="mb-3">STATUS - <?php echo $row['state'];?></ h5>
<br>
<br><br>
<a href="company_update_admin_page.php?id=<?php echo $row['id'];?> " class="bt-login mt-3 " style="margin-top:24px;"> UPDATE! </a>

<?php
 }
?>
 

        </div>
        </div>
        </div>
        </div>
        </div>
</div>
</div>
<!-- Footer Section -->

<footer class="page-footer font-small footer btn-secondary">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    © 2020 Copyright: PLACEMENT 
  </div>

</footer>



</body>
</html>