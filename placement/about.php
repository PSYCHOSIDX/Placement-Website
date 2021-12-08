<?php 
session_start();
include 'includes/db.php';

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
<!--FULL SPAN-->

<div class="col-12 col-md-12 col-lg-12 mb-3">

<h1 class="text-center login-head mb-5" style="font-size: 45px;">"P L A C E M E N T"</h1>
</div>
<br> <br>
<!-- LEFT mission -->
<div class="border col-12 col-md-4 col-lg-6   left-side tex-center mb-3">
<h2 class="login-headx p-5 text-center" style="font-size: 43px">OUR MISSION</h2> <br>
<p style="font-size: 21px" class="text-center">To prepare the students of ABC Group Of Institutes with interview skills,confidence,technical as well as communication skills. Provide them sufficient training in aptitude.To build a source for recruitment.In order to enhance the students with knowledge about business,commercial and professional sectors in their fields.
</p>
</div>
<!--RIGHT mission-->
<div class=" col-12 col-md-6 right-side ">
<img src="images/mission.svg" class=" img-fluid  m-2 p-5" alt="Responsive image">
</div>
<br>
<!--Left Vision-->
<div class="border col-12 col-md-6 left-side">
<h2 class="login-headx p-5 text-center" style="font-size: 43px">VISION</h2> <br>
<p style="font-size: 21px" class="text-center">To Make PLACEMENT The Best Platform For Students And Recruiters For Training And Placement Around The State Of Goa And Achieving Par-Excellent Results From Our Services </p>
</div>
<!--Right Vision -->
<div class="col-12 col-md-4 col-lg-6   left-side tex-center mb-3">
<img src="images/vision.svg" class=" img-fluid m-2 p-5" alt="Responsive image">
</div>

<br><br>  
<!--Left Dev -->
  <div class=" mt-4 border  col-12 col-md-6 left-side">
<h2 class="login-headx p-5 text-center" style="font-size: 43px">Our Dev Team</h2> <br>
<p style="font-size: 21px"  class="text-center" >Siddhesh Kamath : Lead Developer.
    <br>
    Rahul Kothakar : Testing Eng.
    <br>
    Pallavi Damale : Testing Eng.
    <br>
    Saniya Tari    : Documentation.
</p>
  </div>
<!--RIGHT Dev-->
<div class=" col-12 col-md-6 right-side">
<img src="images/devx.svg" class=" img-fluid m-2 p-3" alt="Responsive image">
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