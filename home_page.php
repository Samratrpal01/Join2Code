<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join2Code</title>
  <link rel="icon" href="https://drive.google.com/uc?export=download&id=1YCCMK9qmMg7ayFbQq8KljC6cJJZIYGc8" type="image/icon type">



  <?php
    include 'link.php';
    include 'connection.php';

  ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="style1.css" />

  <style>

    html{
      scroll-behavior:smooth;
    }

.img-jumbo{
    background-image: url('https://drive.google.com/uc?export=download&id=1E8cr4MxlrL_VAdyMjKaw9fKVWsJxGgCK');
    background-size: 100% 100%;
    height: 600px; 
}


.text2{
    text-align: left;
    color: #FFFF00;
    font-size: 25px;
    font-weight: bold;
    margin-top: 120px;
}

.headings{
  text-transform: uppercase;
  font-size: 30px;
  text-shadow: 2px 2px #000;
}

.aboutdesc{
  text-font: 20px;
  font-family: 'Raleway', sans-serif;
}

.aboutus{
  height:350px;
}


#profileImage{
    background-color:#fff;
    border:2px solid white;    
    height:38px;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    width:38px;
    padding-top:5px;
    color: white;
    background-color: green;
}

.profile-link{
  margin-top: 5px;
}

@media only screen and (max-width: 767px){
    #profileImage{
      margin-left: 162px;
    }    

    .profile-link{
      margin-top: 0;
      margin-right: 20px;
    }

}


.footerdiv{
  background-color: #D4D3B6;
}

.footer {

position: fixed;
left: 0;
bottom: 0;
width: 100%;
}

           #loading {
    background: url('loader.gif') no-repeat center center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 9999999;
}

</style>

</head>
<script>

    
function hideLoader() {
    $('#loading').hide();
}

$(window).ready(hideLoader);

// Strongly recommended: Hide loader after 20 seconds, even if the page hasn't finished loading
setTimeout(hideLoader, 20 * 1000);
</script>


</head>


<body>
        <div id="loading"></div>


  
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

<div class="container">
<a class="navbar-brand" href="home_page.php"><img src="Images/logo.png" alt="Logo" style="width: 130px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <div class="justify-content-end">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home_page.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about_us">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#courses">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footerid">Contact Us</a>
      </li>
  </div>


      <ul class="nav navbar-nav ml-auto">

      <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
      {
      ?>

        <a> <div id="profileImage"> </div> </a>

        <li class="nav-item dropdown profile-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


        
         
        

      
    
    
      <script type="text/javascript">
        $(document).ready(function() {
            var firstName = sessionStorage.getItem("name");

            var matches = firstName.match(/\b(\w)/g);
            var acronym = matches.join('');

            var profileImage = $('#profileImage').text(acronym);
            
        });
    </script>
      
      
      

        </a>

        


        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="profile.php">Dashboard</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>

      </li>



      <?php }else{ ?>
                    <li class="nav-item">
        <a class="nav-link" href="registration_form.php"><span class="fas fa-user"></span> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
      </li>              
        <?php } ?>


    </ul>
  </div>
  </div>
</nav>

<div class="jumbotron img-jumbo">
  <div class="container text2">
  <h1 style="font-size: 40px;" class="photo_text">Welcome To<br>The Coding World</h1>
  <br>
      <a href="registration_form.php" class="btn btn-success btn-lg photo_text" role="button">Get Started</a>
  </div>
</div>

<div class="container" id="about_us">

  <h2 class="headings">
    About Us
  </h2>

  <hr>


</div>




<div class="container">
  
<div class="row">
    <div class="col-sm-6">
      <img src="Images/best-about-us-pages.jpg" alt="About Us Image" class="img-fluid aboutus">
    </div>
    <div class="col-sm-6">
      <p>Our coding classes helps students who wants to ace an interview and wants to excel in programming . 
<br>
We Provides Free Courses To Enhance The Coding Skills Of Youth.
<br>
Learn On Your Schedule And On Your Venue.
<br>
Website contains a wide range of courses from basics of programming to advanced like C, C++ etc. .
<br>
Students can search for courses and can gain knowledge from their favorite faculty .
<br>
Each course comes with a project that helps students to implement theoretical knowledge into real world system.
</p>
    </div>
  </div>
  
</div>

<br> <br>

<div class="container" id="">

<h2 class="headings">
    COURSES
</h2>

<hr>



<div class="container">
 
<div class="row">
 
  <div class="col-sm-4">
 
    <div class="card">
 
    <img class="card-img-top" src="Images/ccourse.jpg" alt="the image alt text here"style="height: 250px;">
 
      <div class="card-body text-center">
 
        <h5 class="card-title"> C </h5>
 
        <p class="card-text text-left"> Learn C Programming Language In A Easy Way. </p>
 
        <a href="coursepage.php" class="btn btn-warning"> Go To Course </a>
 
      </div>
 
    </div>
 
  </div>
 
  <div class="col-sm-4">
 
    <div class="card">
 
    <img class="card-img-top" src="Images/cppcourse.png" alt="the image alt text here"style="height: 250px;">
 
      <div class="card-body text-center">
 
        <h5 class="card-title"> C++ </h5>
 
        <p class="card-text text-left">Learn C++ Programming Language In A Easy Way. </p>
 
        <a href="coursepage01.php" class="btn btn-warning"> Go To Course </a>
 
      </div>
 
    </div>
 
  </div>
 
   
 
</div>
 
</div>

      </div>


<br> <br>

<div class="container" id="">

<h2 class="headings">
    Our Team
</h2>

<hr>



<div class="container">
 
<div class="row">
 
  <div class="col-sm-4">
 
    <div class="card">
 
    <img class="card-img-top" src="Images/team.jpg" alt="the image alt text here" style="height: 250px;">
 
      <div class="card-body text-center">
 
        <h5 class="card-title"> Nikhil Gupta </h5>
 
        <p class="card-text"> About Nikhil </p>
 
        <a href="#" class="btn btn-warning">More info</a>
 
      </div>
 
    </div>
 
  </div>
 
  <div class="col-sm-4">
 
    <div class="card">
 
    <img class="card-img-top" src="Images/team.jpg" alt="the image alt text here" style="height: 250px;">
 
      <div class="card-body text-center">
 
        <h5 class="card-title"> Nitikesh Singh </h5>
 
        <p class="card-text"> About Nitikesh </p>
 
        <a href="#" class="btn btn-warning">More info</a>
 
      </div>
 
    </div>
 
  </div>
 
  <div class="col-sm-4">
 
    <div class="card">
 
    <img class="card-img-top" src="Images/team.jpg" alt="the image alt text here" style="height: 250px;">
 
      <div class="card-body text-center">
 
        <h5 class="card-title text-center"> Rahul Pal </h5>
 
        <p class="card-text"> About Rahul </p>
 
        <a href="#" class="btn btn-warning text-right">More info</a>
 
      </div>
 
    </div>
 
  </div> 
 
</div>
 
</div>

      </div>














<br>
<br>

<div class="footerdiv" id="footerid">

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"> Join2Code </h6>
        <p> You Should Join Us To Build Your Career In Programming. </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"> Courses </h6>
        <p>
          <a href="c_course.php"> C Course </a>
        </p>
        <p>
          <a href="cpp_course.php"> Cpp Course </a>
        </p>
        <!-- <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p> -->
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="home_page.php"> Home </a>
        </p>
        <p>
          <a href="registration_form.php"> Register With Us </a>
        </p>
        <p>
          <a href="courses.php"> Start Learning </a>
        </p>
        <!-- <p>
          <a href="#!"></a>
        </p> -->
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Dwarka, New Delhi </p>
        <p>
          <i class="fas fa-envelope mr-3"></i> nkg0280@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91-7456077288</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91-9193366942 </p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="http://localhost/Registration_form/home_page.php">
            <strong> JOIN2CODE </strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/Nik17999">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->



</div>








</body>

</html>