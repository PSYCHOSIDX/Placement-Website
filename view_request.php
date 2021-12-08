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

//Request msg unread(HOLD)
$r ="select * from request where status='hold' ORDER BY date DESC;";
$r_result = mysqli_query($con, $r);

//Request msg read(ACCEPTED)
$ar ="select * from request where status='accept'  ORDER BY date DESC;";
$ar_result = mysqli_query($con, $ar);

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
       <!-- REQUEST ON HOLD -->
<h2 class="bt-login" style="color:white;">REQUEST</h2>
       <br>   
       <h5 class="bg-light p-1 text-center" style="color:black; border-radius:5px"> REQUEST'S ON HOLD</h5>
<?php
 $rnum = mysqli_num_rows($r_result);
 if($rnum == 0)
 {
   echo "<div class='card text-center bt-login mb-4 ' style='max-width: 74rem;color:white'>
   <div class='card-header '>NO REQUEST'S LEFT</div>
   <div class='card-body '>
     <p class='card-text   style='color:white;'> EMPTY</p>
   </div>
   </div>";
 }

else
while($row = mysqli_fetch_array($r_result))
{
 
?> 

<!-- HOLD msg -->
<p>
  <h5 class="btn btn-warning"  style="width:300px;color:white;">
    <?php echo $row['name'];?>
  </h5>
</p>
<div id="collapseExample">
  <div class="card card-body">
    <p>  <!-- if gender * means both --><?php echo 'Requested For A STUDENT With'.' '.'Gender'.' '.$row['sex'].' ,'.'Department'.' '.$row['department'].' '.'With Nationality'.' '.$row['nationality'].' SUBMITTED IN'.' '.$row['date'];?></p>
   
    <a class="btn bg-primary m-1" href="reject.php?no=<?php echo $row['no']?>" style="color:white;" >REJECT</a>
    <a class="btn bg-primary m-1" href="hold.php?no=<?php echo $row['no']?>" style="color:white;" >HOLD</a>
    <a class="btn bg-primary m-1" href="accept.php?no=<?php echo $row['no']?>" style="color:white;" >ACCEPT</a>
  </div>
</div>

<?php
 }
?>
</div>



        <!-- right side -->
        
        <div class=" bg-dark col-12 col-md-5 col-lg-7 right-side border mt-1 m-1 ml-2 border-dark p-4 text-center" style="border-radius:7px">
<!--contact quries-->
<h2 class="bt-login" style="color:white;">ACCEPTED REQUEST'S</h2>
       <br>   
       <h5 class="bg-light p-1 text-center" style="color:black; border-radius:5px">REQUEST FROM</h5>
<?php
while($row = mysqli_fetch_array($ar_result))
{
?> 

<!-- ACCEPTED msg -->
<p>
  <h5 class="btn btn-primary"  style="width:400px;color:white;">
    <?php echo $row['name'];?>
  </h5>
</p>
<div id="collapseExample">
  <div class="card card-body  bg-success" >
  <p style="color:white; cursor:pointer">  <!-- if gender * means both --><?php echo 'Requested For A STUDENT With'.' '.'Gender'.' '.$row['sex'].' ,'.'Department'.' '.$row['department'].' '.'With Nationality'.' '.$row['nationality'].' SUBMITTED IN'.' '.$row['date'];?></p>
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