<?php 
session_start();
include 'includes/db.php';

error_reporting(E_ERROR);
$name = $_GET['name'];
$rs="select * from request where name='$name' ";
$rs_result= mysqli_query($con,$rs);
while($row = mysqli_fetch_array($rs_result))
{
  $sex = $row['sex'];
  $avg_class = $row['avg_class'];
  $department = $row['department'];
  $nationality = $row['nationality'];
  

$s = "select * from student where sex='$sex' && avg_class='$avg_class' && department='$department' && nationality='$nationality' && state='active' ORDER BY desc";
$sr = mysqli_query($con,$s);
}
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
        
        <divx class="col-12 col-md-12 col-lg-12 tex-center mb-3">
          <!--STUDENT DATA Section -->
         <!-- DATE -->
  <div style="margin-top:-20px;" class="card text-center bt-flu mb-4 " style="max-width: 34rem;color:white">
  <div class="card-header ">TODAY'S DATE</div>
  <div class="card-body ">
    <p class="card-text bg-dark "  style="color:white"><?php $date = getdate(date("U")); echo date("l jS  \of F Y ") ?></p>
  </div>
  </div>
 <!-- view Data-->
 <?php
   $snum = mysqli_num_rows($sr);
   if($snum >0){
 while($row = mysqli_fetch_array($sr))
 {

 ?>
 <table class="table   table-dark table-bordered mt-1  table-responsive-sm table-responsive-md table-responsive-lg "  style="border-radius:9px;">
 
 <thead class="thead bt-login">
 <tr> <td scope="col" colspan="8" >STUDENT LIST</tr></tr>
 </thead>
 <thead class="thead bg-dark">
   
     <tr>
       
     <th scope="col">NAME</th>
     <th scope="col" class="bg-secondary" >GENDER</th>
     <th scope="col"> AVERAGE CLASS </th>
     <th scope="col">EMAIL</th>
     <th scope="col">ADDRESS</th>
     <th scope="col">ROLL NO</th>
     <th scope="col">NATIONALITY</th>
     <th scope="col">DEPARTMENT</th>

     </tr>
   </thead>
 
   
   <tbody>
   <tr>
 <td scope="row"  ><?php echo $row['name'];?></td>
 <td scope="row" class="bg-secondary"><?php echo $row['sex']?></td>
 <td scope="row"><?php echo $row['avg_class']?></td>
 <td scope="row"><?php echo $row['email']?></td>
 <td scope="row"><?php echo $row['address']?></td>
 <td scope="row"><?php echo $row['rollno']?></td>
 <td scope="row"><?php echo $row['nationality']?></td>
 <td scope="row"><?php echo $row['department']?></td> 

</tr>
 
 
 </tbody>
 </table>
<?php 
}
   }
   else echo "<div class='card text-center bt-login mb-4 ' style='max-width: 74rem;color:white'>
   <div class='card-header '>REQUEST RESULT</div>
   <div class='card-body '>
     <p class='card-text   style='color:white;'> NO MATCH FOUND</p>
   </div>
   </div>";
?>      <br>
         
         </div>
</div>

        </div>
        </div>
        </div>
         




<!-- Footer Section -->

<footer class="page-footer font-small footer btn-secondary mt-5">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    © 2020 Copyright: PLACEMENT 
  </div>

</footer>

</body>
</html>