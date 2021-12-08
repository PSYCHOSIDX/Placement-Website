
<?php
session_start();
include('includes/db.php');
$id=$_GET['id'];
$s = "select * from  company where id=$id "; // select all 
$s_result = mysqli_query($con, $s);

while($row = mysqli_fetch_array($s_result))
{
    $name = $row['name']; //store value from array in var 
    $email = $row['email'];
$description = $row['description'];
$specialization =$row['specialization'];
$website = $row['website'];
$state = $row['state'];
$address = $row['address'];
$pass = $row['pass'];
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
        
        <div class="col-12 col-md-4 col-lg-6   left-side tex-center mb-2">
           <!-- form for company  -->
            <form action="update_a_company.php?id=<?php echo $id?>"method="POST">
                <h1 class="login-head"> COMPANY UPDATE</h1>
                
               
                <h3>NAME</h3>
                <input type="text" class="form-control" name="name" value="<?php echo $name?>" placeholder="name" >
                
                <h3>PASSWORD</h3>
                <input type="text" class="form-control" name="pass" value="<?php echo $pass?>" placeholder="pass" >

                <h3>EMAIL</h3>
                <input type="text" class="form-control" name="email" value="<?php echo $email?>" placeholder="Email">

                <h3>ADDRESS</h3>
                <input type="text" class="form-control" name="address" value="<?php echo $address?>" placeholder="Address">

                 <h3>SPECIALIZATION</h3>
                <input type="text" class="form-control" name="specialization" value="<?php echo $specialization?>" placeholder="Specialization">

                <h3>DESCRIPTION</h3>
                <input type="text" class="form-control" name="description" value="<?php echo $description?>" placeholder="Description">
                <br>
                <h3>WEBSITE</h3>
                <input type="text" class="form-control" name="website" value="<?php echo $website?>" placeholder="Website">
                
                <h2>STATE</h2>
                 <select name="state"  class="form-control btn-secondary "value="<?php echo $state?>" placeholder="<?php echo $state?>">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                 </select>
               
               
                <br>
<a><input style="background-color:rgba(0, 0, 0, 0.014);"type="submit" class="bt-login" name="UPDATE" value="submit" ></a>

            </form>
         

         <br>
         
        </div>

        <div class=" col-12 col-md-6 right-side">
        <h3 class="sign-tag-line"> <br>YOU ARE NOW UPDATING YOUR ACCOUNT INFORMATION <br>.</h3>
        <img src="images/com_img.svg" class="img-fluid mt-5 ml-2s student_img" alt="Responsive image">
        <h4 class="login-head bt-login  mt-4 ml-2s text-center " style="border-radius:9px;color:white; padding:40px 50px;">"The average person puts only 25% of his energy into his work.
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