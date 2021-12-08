<?php 
session_start();

include 'includes/db.php';

$x=$_SESSION["username"];

if(isset($x))
{}
else{ header('location:index.php');}



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
    <meta name="viewport" content="width=device-width, initial-scale=1 ">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--styles & Scripts-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Footer Section -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLACEMENT MANAGEMENT APV</title>
</head>
<body>

<style> h4{color:white}</style>
    <!-- NAV BAR -->

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
      <li><a class="nav-link btn btn-light m-1" href="company.php" style="color:black;"><?php echo $_SESSION['username']; ?> </a>
      </li>

        <li> <a class="nav-link btn btn-primary" href="logout.php"> LOGOUT </a></li>
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
 $name = $row['name'];
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

<h5 style="color:white; font-size:17px"> WEBSITE - <?php echo $row['website'];?></ h5>
<br>

<h5 style="color:white; font-size:17px">DESCRIPTION - <?php echo $row['description'];?></ h5>

<br><br><br>
<a href="company_update_page.php?id=<?php echo $row['id'];?> " class="bt-login " style="margin-top:24px;"> UPDATE! </a>


</p>    </div>
        </div>
        </div>

<?php
}
?>

        <!-- right side -->
        
        
        <div class=" col-12 col-md-6 right-side">
      
        <!-- EVENT SECTION-->
         <div class="card text-center bt-login mb-4 " style="max-width: 38rem;color:white">
  <div class="card-header ">EVENT SHEDULE</div>
  <div class="card-body ">
    <p class="card-text "  style="color:white"><?php echo $event ?></p>
  </div>
  </div>
  <br>

  <!-- DATE -->
  <div style="margin-top:-20px;" class="card text-center bt-flu mb-4 " style="max-width: 34rem;color:white">
  <div class="card-header ">TODAY'S DATE</div>
  <div class="card-body ">
    <p class="card-text bg-dark "  style="color:white"><?php $date = getdate(date("U")); echo date("l jS  \of F Y ") ?></p>
  </div>
  </div>
  <br>
<!--contact quries-->
<h4 class="border bt-flu" style="color:white;" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">REQUEST STATUS</h4>
       <br>  

<?php 
$rs = "select * from  request where name='$name'";
$rs_result = mysqli_query($con, $rs);

while($row = mysqli_fetch_array($rs_result))
{
?>

<!-- READ msg -->

<div class="collapse" id="collapse" class="ml-1">
  <div class="card card-body border">
  <p style="font-size: 15px"> <?php $v="data.php";
 $class="btn ";
 $s=" color:white;background-color:blue; ";
  echo " REQUEST SUBMITTED ON  : ".' '.$row['date']." | "."CURRENT STATUS " ." : ".$row['status']."   ";

 if($row['status']=='accept')
  {
  echo"  <a style=$s class=$class href='$v?name=$name'> VIEW </a>";
  }
else "";
  ?></p>

  </div>
</div>

<?php
}
?>
<br>

<!-- REQUEST SECTION-->
<p>

<h4 style="margin-top:-49px;" class="border  bt-flu" data-toggle="collapse" data-target="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   REQUEST DATA 
</h4>

</p>
  
  
<br>



<!-- Criteria Section-->
<div class="collapse" id="collapseExample">

  <div class="card card-body mt-3">
   
<form class="p-4 border ml-1 mt-1" action="request_insert.php?name=<?php echo $name ;?>"  method="POST">

<h1 class="login-head">CRITERIA FORM</h1>


<h2>GENDER</h2>
 <select name="sex"  class="form-control btn-secondary "value="">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="*">Both</option>
</select>

<h2>NATIONALITY</h2>
 <select name="nationality"  class="form-control btn-secondary " value="">
    <option value="indian">INDIAN</option>
    <option value="other">OTHER</option>
</select>

<h2>AVERAGE CLASS</h2>
 <select name="avg_class"  class="form-control btn-secondary " value="">
    <option value="fail">fail</option>
    <option value="second class">SECOND CLASS</option>
    <option value="first class">FIRST CLASS</option>
    <option value="distinction">DISTINCTION</option>
</select>

<h2>DEPARTMENT</h2>
 <select name="department"  class="form-control btn-secondary "value="">
    <option value="mechanical">Mechanical Engineering</option>
    <option value="electronics">Electronics And TEL.COM.</option>
    <option value="computers">Computer Engineering</option>
    <option value="automobile">AutoMobile Engineering</option>
    <option value="medical electronics">Medical Electronics</option>
</select>



<input onclick="alert('THANK YOU ! \n FOR SUBMITING YOUR REQUEST')" style="background-color:rgba(0, 0, 0, 0.014);"type="submit"  name="SUBMIT" class="bt-login">

</form>



</div>
</div>

        </div>
        </div>
        </div>
  

<footer class="page-footer font-small footer btn-secondary">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    © 2020 Copyright: PLACEMENT 
  </div>

</footer>



</body>
</html>