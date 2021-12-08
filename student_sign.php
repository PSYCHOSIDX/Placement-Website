
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
           <form action="student_insert.php" method="POST">

                <h1 class="login-head">STUDENT SIGN UP</h1>

                <h2>USERNAME</h2>
                <input type="text"  class="form-control " name="username" value="" placeholder="Enter UserName" required>

                <h2>PASSWORD</h2>
                <input type="pass"  class="form-control " name="pass" value="" placeholder="Enter Pass"  required>

                <h2>GENDER</h2>
                 <select name="sex"  class="form-control btn-secondary "value="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <h2>NAME</h2>
                <input type="text"  class="form-control " name="name" value="" placeholder="Enter Name"  required>

                
                <h2>EMAIL</h2>
                <input type="text"  class="form-control " name="email" value="" placeholder="Enter Email" required>

                <h2>ADDRESS</h2>
                <input type="text"   class="form-control "name="address" value="" placeholder="Enter Address" required>


                <h2>ROLLNO</h2>
                <input type="text"  class="form-control " name="rollno" value="" placeholder="Enter RollNo" required>
                
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

                
                <br>
<input style="background-color:rgba(0, 0, 0, 0.014);"type="submit"  name="login" class="bt-login">

            </form>
         

         <br>
         
        </div>

        <div class=" col-12 col-md-6 right-side">
        <h3 class="sign-tag-line"> <br>YOU ARE NOW SIGINING UP AS STUDENT <br> PLEASE FILL IN YOUR ACCOUNT DETAILS CORRECTLY <br>.</h3>
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