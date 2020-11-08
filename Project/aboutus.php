<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/part3.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body style="background-color:#80ba98">
    <!-- Navigation -->
    <nav class = "navbar navbar-expand-md navbar-light sticky-top welcomePage" style="background-color: #baefff;" >
        <div class = "container-fluid">
            <a class = "navbar-brand" href = "Home Page.php"> <img src ="images/logo.png" width = "100 px" height = "100 px"></a>
            <button class = "navbar-toggler" type = "button" data-toggle="collapse" data-target = "#navbarResponsive" aria-controls="navbarResponsive" aria-expanded = "false" 
            aria-label = "Toggle Navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>
        <div class = "collapse navbar-collapse" id = "navbarResponsive">
            <ul class = "navbar-nav ml-auto">
                <li class = "nav-item activ">
                    <a class = "nav-link" href="Home Page.php">Home</a>
                </li>
                <li class = "nav-item activ">
                    <a class = "nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class = "nav-item activ">
                    <a class = "nav-link" href="contactus.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    <?php
     if(isset($_SESSION['email']) && isset($_SESSION['active']))
    {
    ?>
    <span style="color: #525252"><?php echo $_SESSION['email'] ?></span>
    <button class="button" style="vertical-align: middle" onclick="location.href='logout.php'"><span>Logout</span></button>
    <?php
    }
    else
    {    
    ?>
    <button class="button" style="vertical-align: middle" onclick="location.href='login.php'"><span>Login</span></button>
    <button class="button" style="vertical-align: middle" onclick="location.href='signup.html'"><span>Signup</span></button>
    <?php
	}
	?>
</nav>
<div class="audiv">
<h1 style="color: white;text-align: center;">About Us</h1>	
</div>
<div class="container-fluid">
        
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/slide 1.jpg" class="d-block w-100 slide-images" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide 2.jpg" class="d-block w-100 slide-images" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" class="d-block w-100 slide-images" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
  <!-- Card Component Begins -->

<div class="auenvelope primary-width">

    <div class="card card-component" style="width: 18rem; justify-content: center;text-align: center;">
        <img class="card-img-top img-size" src="images/tejas.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Tejasv Goel</h5>
            <p class="card-text font-weight-bold">Developer</p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>

    <div class="card card-component" style="width: 18rem;justify-content: center;text-align: center;">
        <img class="card-img-top img-size" src="images/shreyas.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Shreyas Babu</h5>
            <p class="card-text font-weight-bold font-weight-bold"> Lead Front End Developer</p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>

    <div class="card card-component" style="width: 18rem; justify-content: center;text-align: center;">
        <img class="card-img-top img-size" src="images/huzaifa.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Huzaifa Saboowala</h5>
            <p class="card-text font-weight-bold font-weight-bold">Lead Back End Developer</p>
            <!-- a href="#" class="btn btn-primary">Go somewhere</a -->
        </div>
    </div>

</div>
  <!-- Footer -->
<footer>
    <div class= "container-fluid padding" style="background-color: #baefff;">
        <div class= "row text-center">
            <div class = "col-md-4">
                <img src ="images/logo.png" width = "150 px" height ="100 px">
                <hr class = "light">
                <p> 123-456-7890 </p>
                <p> inquiries@hstworld.com </p>
                <p> 290 Bremner Blvd</p> 
                <p> Toronto, ON M5V2L9 </p>
            </div>
            <div class = "col-md-4">
                <hr class = "light">
                <h5>Operational Hours </h5>
                <hr class = "light">
                <p>Monday - Friday: 9 AM - 5 PM </p>
                <p>Saturday: 11 AM - 4 PM <p>
                    <p>Sunday Closed </p>
                </div>
                <div class = "col-md-4">
                    <hr class = "light">
                    <h5>Connect With Us </h5>
                    <hr class = "light">
                    <a  href = "https://www.facebook.com">Facebook </a><br><br>
                    <a href = "https://www.instagram.com">Instagram </a><br><br>
                    <a href = "https://www.snapchat.com">Snapchat </a><br><br>
                    <a href = "https://www.discord.com">Discord </a>
                </div>
                <div class = "col-12">
                    <hr class ="light">
                    <h5>&copy; hstworld.com</h5>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>