
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
        
        <div class="col-12 col-md-4 col-lg-6   left-side tex-center mb-4">
          <!-- FORGOT PASS Section -->
          
<form action="forgot.php" method="POST">
<h1 class="login-head"> FORGOT PASS </h1>

<h3>FILL All FIELDS CORRECTLY TO RESET PASSWORD</h3>

<br>

<h3>Username</h3>
<input type="text" class="form-control" name="username" placeholder="Enter Username" required >

<h3>Email</h3>
<input type="text" class="form-control" name="email" placeholder="Enter Email" required>

<h3>address</h3>
<input type="text" class="form-control" name="address" placeholder="Enter Address"  required>

<h3>New Pass</h3>
<input type="text" class="form-control" name="new_pass" placeholder="Enter New PASS"  required>
    <input style="color:white;" type="submit" class="bt-login" value="SUBMIT">

</form>
        </div>

        <div class=" col-12 col-md-6 right-side">
        <h3 class="login-tag-line"> <br>RESET PASSWORD<br> _</h3>
        <img src="images/fpass.svg" class="img-fluid mt-6"  style="margin-left:20px" alt="Responsive image">
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
