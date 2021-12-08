<?php 
session_start();
include 'includes/db.php';
$x=$_SESSION['username'];
if(isset($x))
{}
else{ header('location:index.php');}

//company select
$c = "select * from  company ";
$c_result = mysqli_query($con, $c);

//admin select
$a = "select * from  admin  where username='$x' ";

//admin select all
$aa="select * from admin ";
$a_result = mysqli_query($con, $a);

//all result
$aresult =  mysqli_query($con,$aa);

//event
$e = "select * from  event";
$e_result = mysqli_query($con, $e);
while($row = mysqli_fetch_array($e_result))
{
    $event = $row['event'];
}

//student
$s = "select * from  student";
$s_result = mysqli_query($con, $s);

//contact msg
$c ="select * from contact where state='unread'";
$c_con = mysqli_query($con, $c);
$c_n =mysqli_num_rows($c_con);

// request msg
$r ="select * from request where status='hold' ";
$r_fire = mysqli_query($con, $r);
$r_n =mysqli_num_rows($r_fire);
//num
$a_num = mysqli_num_rows($aresult);
$c_num = mysqli_num_rows($c_result);
$s_num = mysqli_num_rows($s_result);

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
      <li><a class="nav-link btn btn-light m-1" style="color:black;"  href="admin.php"> <?php echo $_SESSION['username']; ?> </a></li>
      <li> <a class="nav-link btn btn-primary m-1" href="logout.php"> LOGOUT </a></li>
    </ul>
  </div>
</nav>

        <!-- Content Section -->
        <section id="content">

        <div class="container  ">

        <div class="row">
        

        <!--left side -->
        <div class="col-12 col-md-6 col-lg-4 mr-4 ml-2 left-side tex-center ">
       
<!-- Admin profile  -->
        <div class="card bg-dark border border-dark p-3 mr-3 mb-1" style="width: 23rem; border-radius:7px;">
            <img src="images/admin_pic.svg" class="card-img-top  mt-3 " style="width:13rem;margin-left:4rem;" alt="Profile PIC">

            <div class="card-body " style="border-radius:7px;">
            <h5 class="card-title text-center " style="color:rgb(129, 28, 224); font-size:30px;">PROFILE DETAILS</h5>
            <p class="card-text mb-3 ">
           
            <?php
while($row = mysqli_fetch_array($a_result))
{
?> 

<h5 style="color:white; font-size:17px">NAME - <?php echo $row['name'];?></ h5>
<br>

<h5 style="color:white; font-size:16px">EMAIL - <?php echo $row['email'];?></ h5>
<br>

 <h5 style="color:white; font-size:17px">ADDRESS -<?php echo $row['address'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">DESIGNATION - <?php echo $row['designation'];?></ h5>
<br>
<br><br>
<a href="admin_update_page.php?id=<?php echo $row['id'];?> " class="bt-login " style="margin-top:24px;"> UPDATE! </a>

<?php }
?>
</p>    </div>
        </div>
        </div>




        <!-- right side -->
        
        
        <div class=" col-12 col-md-6 right-side  p-3 ml-2 text-center">
           <!-- DATE -->
  <div class="card text-center bt-flu  " style="max-width: 32rem;margin-top:-10px;color:white">
  <div class="card-header ">TODAY'S DATE</div>
  <div class="card-body ">
    <p class="card-text bg-dark "  style="color:white"><?php $date = getdate(date("U")); echo date("l jS  \of F Y ") ?></p>
  </div>
  </div>
         <!-- EVENT SECTION-->
         <div class="card text-white bt-login mb-3 border border-dark" style="max-width: 32rem;color:white">
  <div class="card-header  mb-2">EVENT SHEDULE</div>
  <div class="card-body ">
  <form action="event.php" method="POST">
  <!-- display event variable using php -->
   <input class="text-center btn bg-light" style=" width:100%" type="text" name="event" value='<?php echo $event ?>'
   >
   <br> <br>
      <input class="text-center btn btn-primary" style="color:white;text-decoration:none" type="submit" value="submit"> 
     
        </form>

  </div>
  </div>

<!-- TOTAL COUNT -->

<div class="card text-white bg-dark " style="max-width: 32rem;color:white">
  <div class="card-header ">TOTAL USERS</div>

  <div  class="card-body bg-secondary m-3 border" style="color:white;">
  <h3 style="color:white;">  <?php echo 'STUDENTS  : ' . $s_num ;?></h3> 
  <h3 style="color:white;"><?php echo 'COMPANIES  : '. $c_num; ?></h3>
   <h3 style="color:white;"> <?php echo 'ADMIN  : '. $a_num; ?></h3>


  </div>
</div>

<!-- VIEW -->
<br>

<div class="card text-white bg-dark  "style="max-width: 32rem;color:white" >

  <div class="card-header ">VIEWING OPTIONS</div>
  <div  class="card-body bg-secondary text-center m-3 border" style="color:white">

<a class=" btn btn-primary m-1 " href="admin_student.php" >Students</a> 
<a class="btn btn-primary m-1" href="admin_company.php">Companies</a>
<a class="btn btn-warning m-1" href="view_contact.php" style="color:white;">Queries  <?php echo $c_n; ?> </a>
<a class="btn btn-danger m-1" href="view_request.php" >Requests  <?php echo $r_n; ?> </style="color:blue;"> </a>


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