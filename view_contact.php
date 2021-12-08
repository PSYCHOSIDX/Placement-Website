<?php 
session_start();
include 'includes/db.php';
$x=$_SESSION['username'];

if(isset($x))
{}
else{ header('location:index.php');}

//admin select
$a = "select * from  admin  where username='$x' ";

//admin select all
$aa="select * from admin ";
$a_result = mysqli_query($con, $a);

//all result
$aresult =  mysqli_query($con,$aa);

//contact msg unread
$c ="select * from contact where state='unread' ORDER BY no DESC;";
$c_result = mysqli_query($con, $c);

//contact msg read
$cr ="select * from contact where state='read'  ORDER BY no DESC;";
$cr_result = mysqli_query($con, $cr);

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
        

        <!--left side -->
        <div class="col-12 col-md-6 col-lg-4 m-1 left-side text-center bg-dark p-4" style="border-radius:7px">
       <!--contact quries-->
<h2 class="bt-login" style="color:white;">UNREAD QUERIES</h2>
       <br>   
       <h5 class="bg-light p-1 text-center" style="color:black; border-radius:5px">MESSAGE FROM</h5>
<?php
while($row = mysqli_fetch_array($c_result))
{
?> 

<!-- UNREAD msg -->
<p>
  <h5 class="btn btn-warning"  style="width:300px;color:white;">
    <?php echo $row['name'];?>
  </h5>
</p>
<div id="collapseExample">
  <div class="card card-body">
    <p> <?php echo $row['querry'].''. "From Email Id : ".' '.$row['email'];?></p>
    <a class="bg-primary" href="read.php?no=<?php echo $row['no']?>" style="color:white;" >READ</a>
  </div>
</div>

<?php
 }
?>
</div>



        <!-- right side -->
        
        <div class=" bg-dark col-12 col-md-5 col-lg-7 right-side border mt-2 m-1 ml-2 border-dark p-5 text-center" style="border-radius:7px">
<!--contact quries-->
<h2 class="bt-login" style="color:white;">READ QUERIES</h2>
       <br>   
       <h5 class="bg-light p-1 text-center" style="color:black; border-radius:5px">MESSAGE FROM</h5>
<?php
while($row = mysqli_fetch_array($cr_result))
{
?> 

<!-- READ msg -->
<p>
  <h5 class="btn btn-success"  style="width:400px">
    <?php echo $row['name'];?>
  </h5>
</p>
<div id="collapseExample">
  <div class="card card-body border">
    <p> <?php echo $row['querry'].' '." From Email Id : ".' '.$row['email'];?></p>
    <a class="bg-danger" href="del_querry.php?email=<?php echo $row['email'];?>" style="color:white;" >Delete</a>
  </div>
</div>

<?php
 }
?>
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