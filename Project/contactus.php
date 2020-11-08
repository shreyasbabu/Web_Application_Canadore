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
<div id="section4" class="container-fluid">
    <h1>Need Help?</h1>
  <h5>For general comments and inquiries, please get in touch with us with the form below</h5>
  <form>
    <div class="form-group row">
      <div class="col-md-3">
    <label for="Name">Name</label>
    <input type="text" class="form-control" aria-describedby="nameHelp" placeholder="Enter name">
  </div>
  <div class="col-md-3" style="margin-left: 30px;">
    <label for="Email Address">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
</div>
<div class="form-group row">
    <div class="col-md-6">
    <label for="Description">Subject</label>
    <input type="textarea" class="form-control" aria-describedby="nameHelp" placeholder="Enter Subject">
    </div>
  </div>
<div class="form-group row">
    <div class="col-md-6">
    <label for="Description">Description</label>
    <textarea class="form-control" aria-describedby="nameHelp" placeholder="Type your message here" rows="6"></textarea> 
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-6">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
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