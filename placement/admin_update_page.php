
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
        
        <div class="col-12 col-md-4 col-lg-6   left-side tex-center mb-2">
           <!-- form for student entry -->

    
<?php
session_start();
$x=$_SESSION['username'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'placement');
$a = "select * from  admin where username='$x'"; // select all 
$a_result = mysqli_query($con, $s);

while($row = mysqli_fetch_array($s_result))
{
$name = $row['name'];
$email = $row['email'];
$pass =$row['pass'];
$designaton = $row['designation'];
$address = $row['address'];

}
?>
           <form action="update_admin.php" method="POST">

                <h1 class="login-head">STUDENT UPDATE</h1>

                <h2>NAME</h2>
                <input type="text"  class="form-control " name="name" value="<?php echo $name ?>" placeholder="<?php echo $name ?>"  >


                <h2>PASSWORD</h2>
                <input type="pass"  class="form-control " name="pass" value="<?php echo $pass ?>" placeholder="<?php echo $pass ?>"  >

                <h2>EMAIL</h2>
                <input type="text"  class="form-control " name="email" value="<?php echo $email ?>" placeholder="<?php echo $email ?>" >

                <h2>ADDRESS</h2>
                <input type="text"   class="form-control "name="address" value="<?php echo $address ?>" placeholder="<?php echo $address ?>" >


    
                <h2>DESIGNATION</h2>
                <input type="text"   class="form-control "name="address" value="<?php echo $designation?>" placeholder="<?php echo $designation ?>" >


                
                <br>
<input style="background-color:rgba(0, 0, 0, 0.014);"type="submit"  name="UPDATE" class="bt-login">

            </form>
         

         <br>
         
        </div>

        <div class=" col-12 col-md-6 right-side">
        <h3 class="sign-tag-line"> <br>YOU ARE NOW UPDATING YOUR ACCOUNT INFORMATION <br>.</h3>
        <img src="images/student_img.svg" class="img-fluid mt-5 ml-2s student_img" alt="Responsive image">
        <h4 class="login-head btn-primary  mt-4 ml-2s text-center " style="border-radius:9px; padding:40px 50px;">"The average person puts only 25% of his energy into his work.
The world takes off its hat to those who put in more than 50% of their capacity,
and stands on its head for those few and far between souls who devote 100%."</h5>
</div>
        
        </div>
        
        </div>
         

<!-- Footer Section -->

<footer class="page-footer font-small footer btn-secondary ">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    © 2020 Copyright: PLACEMENT 
  </div>

</footer>



</body>
</html>