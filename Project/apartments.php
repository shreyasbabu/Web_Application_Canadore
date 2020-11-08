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
<body style="background-color:black">
    <!-- Navigation -->
    <nav class = "navbar navbar-expand-md navbar-light sticky-top welcomePage" style="background-color: #baefff;" >
        <div class = "container-fluid">
            <a class = "navbar-brand" href ="Home Page.php"> <img src ="images/logo.png" width = "100 px" height = "100 px"></a>
            <button class = "navbar-toggler" type = "button" data-toggle="collapse" data-target = "#navbarResponsive" aria-controls="navbarResponsive" aria-expanded = "false" 
            aria-label = "Toggle Navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>
        <div class = "collapse navbar-collapse" id = "navbarResponsive">
            <ul class = "navbar-nav ml-auto">
                <li class = "nav-item activ">
                    <a class = "nav-link" href="Home page.php">Home</a>
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
<!-- Search Bar -->
<nav class="navbar navbar-expand-lg navbar-light m-3" style="background-color: #f03939ec;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="apartments.php">House Renting</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Price
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <label class="center">$1000  <input type="checkbox"> </label>
     <label class="center">$2000  <input type="checkbox"> </label>
    <label class="center">$3000  <input type="checkbox"> </label>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Location
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <label class="center">Toranto  <input type="checkbox"> </label>
     <label class="center">Vancover  <input type="checkbox"> </label>
    <label class="center">Montreal  <input type="checkbox"> </label>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bed Rooms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <label class="center">1+  <input type="checkbox"> </label>
     <label class="center">2+  <input type="checkbox"> </label>
    <label class="center">3+  <input type="checkbox"> </label>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bath Rooms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <label class="center">0.5  <input type="checkbox"> </label>
     <label class="center">1  <input type="checkbox"> </label>
    <label class="center">2  <input type="checkbox"> </label>

      </li>
</ul>
<form class="form-inline my-2 my-lg-0">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
<div class="container-fluid">
    <div class="row">
      <div class="col">
        <!-- Menu  -->
        <div class="nav flex-column nav-pills"  role="tablist" aria-orientation="vertical">
            <a class="nav-link active"   href="apartments.php" aria-selected="true" width="30%">Apartments</a>
            <a class="nav-link"    href="Condos.php" role="tab"  aria-selected="false">Condos</a>
            <a class="nav-link"    href="Town House.php" role="tab"  aria-selected="false">Town House</a>
            <a class="nav-link"    href="Rooms.php" role="tab"  aria-selected="false">Rooms</a>
        </div>
    </div>

<div class="col-10">
        <!-- Card Component Begins -->



<div class="list-group">
 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/a1.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">19 Lagoon Rd , Elsipogtog First Nation, NB, E4W 2V6</h6>
            <p class="card-text font-weight-bold"> $660,000 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Michael Landry</h4>
    <p class="card-text">Description<br>Placeholder description for this apartment</p>
    <button type="button" class="btn btn-warning float-right">Buy Now</button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    New Brunswick
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/a2.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">St Andrews Lane Parksville BC V9P 2M5</h6>
            <p class="card-text font-weight-bold"> $440,999 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Grace Denny</h4>
    <p class="card-text">Description<br>Placeholder description for this apartment</p>
    <button type="button" class="btn btn-warning float-right ml-2">Buy Now</button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    British Columbia
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/a3.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">350 Rue Principale , Lac Bouchette, QC, G0W 1V0</h6>
            <p class="card-text font-weight-bold"> $690,000 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">G Roy</h4>
    <p class="card-text">Description<br>Placeholder description for this apartment</p>
    <button type="button" class="btn btn-warning float-right ml-2">Buy Now</button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Quebec
</div>
</div>
</div>

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