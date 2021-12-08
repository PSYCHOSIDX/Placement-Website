<?php 
session_start();

include 'includes/db.php';

$x=$_SESSION["username"];
/*
if(isset($x))
{}
else{ header('location:index.php');}


*/


//event
$e = "select * from  event";
$e_result = mysqli_query($con, $e);
while($row = mysqli_fetch_array($e_result))
{
    $event = $row['event'];
}

//company
$c = "select * from  company where username='$x'";
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
        <a class="nav-link " href="about.php" >About Us</a>
      </li>
    </ul>
  </div>
</nav>

        <!-- Content Section -->
        <section id="content">

        <div class="container  ">

        <div class="row">
        
        <div class="col-12 col-md-6 col-lg-4  m-2 left-side tex-center ">
       
<!-- student profile  -->
        <div class="card bg-dark border border-warning" style="width: 22rem; border-radius:7px;">
            <img src="images/company_img.svg" class="card-img-top  mt-3 " style="width:13rem;margin-left:4rem;" alt="Profile PIC">

            <div class="card-body " style="border-radius:7px">
            <h5 class="card-title text-center " style="color: rgb(129, 28, 224); font-size:30px;">PROFILE DETAILS</h5>
            <p class="card-text mb-3 ">
           
            <?php
while($row = mysqli_fetch_array($c_result))
{
?>

<h5 style="color:white; font-size:17px">NAME - <?php echo $row['name'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">EMAIL - <?php echo $row['email'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">STATE - <?php echo $row['state'];?></ h5>
<br>

 <h5 style="color:white; font-size:17px">ADDRESS -<?php echo $row['address'];?></ h5>
<br>

<h5 style="color:white; font-size:17px"> SPECIALIZATION - <?php echo $row['specialization'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">DESCRIPTION - <?php echo $row['description'];?></ h5>

<br><br><br>
<a href="company_update_page.php?id=<?php echo $row['id'];?> " class="bt-login " style="margin-top:24px;"> UPDATE! </a>

<?php }
?>
</p>    </div>
        </div>
        </div>
        <!-- right side -->
        
        
        <div class=" col-12 col-md-6 right-side">
         <!-- EVENT SECTION-->
         <div class="card text-center bg-primary mb-2 m-2" style="max-width: 22rem;color:white">
  <div class="card-header ">EVENT SHEDULE</div>
  <div class="card-body ">
    <p class="card-text "  style="color:white"><?php echo $event ?></p>
  </div>
  </div>
<!-- REQUEST SECTION-->


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