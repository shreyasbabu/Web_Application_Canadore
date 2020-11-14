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
            <a class = "navbar-brand" href ="index.php"> <img src ="images/logo.png" width = "100 px" height = "100 px"></a>
            <button class = "navbar-toggler" type = "button" data-toggle="collapse" data-target = "#navbarResponsive" aria-controls="navbarResponsive" aria-expanded = "false" 
            aria-label = "Toggle Navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>
        <div class = "collapse navbar-collapse" id = "navbarResponsive">
            <ul class = "navbar-nav ml-auto">
                <li class = "nav-item activ">
                    <a class = "nav-link" href="index.php">Home</a>
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
      <label class="center">Toronto  <input type="checkbox"> </label>
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
  <button class="btn btn-warning my-2 my-sm-0"> <a class="text-black" href="index.php">Home</a></button>
</form>
</div>
</nav>
<div class="container-fluid">
    <div class="row">
      <div class="col">
        <!-- Menu  -->
        <div class="nav flex-column nav-pills"  role="tablist" aria-orientation="vertical">
            <a class="nav-link"   href="apartments.php" aria-selected="false" width="30%">Apartments</a>
            <a class="nav-link"    href="Condos.php" role="tab"  aria-selected="false">Condos</a>
            <a class="nav-link"    href="Town House.php" role="tab"  aria-selected="false">Town House</a>
            <a class="nav-link"    href="Rooms.php" role="tab"  aria-selected="false">Rooms</a>
        </div>
    </div>

<div class="col-10">
        <!-- Card Component Begins -->


<!-- Apartments -->
<div class="list-group">
 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/a1.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">19 Lagoon Rd , Elsipogtog First Nation, NB E4W 2V6</h6>
            <p class="card-text font-weight-bold"> $6,000 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Royal Enfield Place</h4>
    <p class="card-text"><h5>Description</h5><br><h6>A 3 BHK spacious apartment with outstanding view.</p><p> Building provides various amenities like Parking, Swimming Pool, Indoor Activities,
   Gym and much more. Everything is inclusive!</p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Royal Enfield Place" data-recipient="Mr. Kimono Kawasaki">I'm Interested</button>
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
            <h6 class="card-title">50–60 Absolute Avenue, Mississauga, ON L925W4 </h6>
            <p class="card-text font-weight-bold"> $4,000 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Absolute Towers</h4>
    <p class="card-text"><h5>Description</h5><br><h6>A 2 BHK spacious apartment in the heart of Mississauga. At a walkable distance from Square One Shopping Centre
     </p><p> Building provides various amenities like Parking, Swimming Pool, Indoor Activities, Gym and much more. Everything is inclusive!</p></h6>
   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Absolute Towers" data-recipient="Mr. Marvin Ducati">I'm Interested	</button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Ontario, Mississauga
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/a3.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">350 Rue Principale , Lac Bouchette, QC, G0W 1V0</h6>
            <p class="card-text font-weight-bold"> $9,000 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Du Kameleon</h4>
    <p class="card-text"><h5>Description</h5><br><h6>A Penthouse apartment with all luxurious facilities one could dream about. All supermarkets at a walkable distance plus complimentary delivery
    	service</p><p> All amenities like Parking, Swimming Pool, Indoor Activities, Gym are present in the house and are available for your use only. Everything is inclusive!</p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Du Kameleon" data-recipient="Mr. Ferocio Lamborghini">I'm Interested</button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Quebec
</div>
</div>
</div>


<!--Condos-->
<div class="list-group">
 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/c1.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">2256  Riverview Rd , Moncton City, NB, E1C 1H6</h6>
            <p class="card-text font-weight-bold"> $3,500 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Merlton Yonge</h4>
    <p class="card-text"><h5>Description</h5><br><h6>A beautiful 1 BHK Condo with an outstanding view of Yonge river.</p><p> Various amenities like Parking, Swimming Pool, Indoor Activities, Gym available. All inclusive!<br></p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Merlton Yonge" data-recipient="Ms. Jen Volkswagen">I'm Interested</button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    New Brunswick
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/c2.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">St Andrews Lane Parksville BC V9P 2M5</h6>
            <p class="card-text font-weight-bold"> $9,500 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Highland Park</h4>
    <p class="card-text"><h5>Description</h5><br><h6>A beautiful top storey 3 BHK condo with a private park for children and elders. Best suited for a retirement life.</p><p>Park contains a children area, and a
    beautiful cycling/jogging track that travels between trees.</p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Highland Park" data-recipient="Mr. Tim Autonissan">I'm Interested</button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    British Columbia
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/c3.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">38 Bloor Street , Lougheed, AB, T0B 2V0</h6>
            <p class="card-text font-weight-bold"> $4,000 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Battistella Avenue</h4>
    <p class="card-text"><h5>Description</h5><br><h6>A beautiful 2 BHK Condo at the centre of Lougheed. At a 10 minute distance from the Airport.</p><p> Various amenities like Parking, Swimming Pool, Indoor Activities, Gym available. All inclusive!<br></p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Battistella Avenue" data-recipient="Mr. Harrison Ford">I'm Interested</button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Alberta
</div>
</div>
</div>




<!-- Twon House -->

<div class="list-group">
 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/t1.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">463 Joliette Rue , Longueuil, QC, J4K 4V2</h6>
            <p class="card-text font-weight-bold"> $5,500</p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Ecuyer Francois</h4>
    <p class="card-text"><h5>Description</h5><br><h6>A big and bright 3 bedroom and 2 bathrooms in the heard of New Brunswick.</p><p> The town House is in a closed community where you and your family can lead a happy life.</p></h6>
   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Ecuyer Francois" data-recipient="Mrs. Margaret Hinkle">I'm Interested   </button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Quebec
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/t2.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">9022 Scurfield Dr NW , Calgary, AB, T3L 1V4</h6>
            <p class="card-text font-weight-bold"> $7,990 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Rick Gerber</h4>
    <p class="card-text"><h5>Description</h5><br><h6>The House is situated in the beating heart of parksville. it is a beautiful 4 bedroom and 3 bathrom town house.</p><p> This is a perfect town house for a larger family as it is conveniently located near schools and parks.</p></h6>
   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Rick Gerber" data-recipient="Mr. Lester Dunn">I'm Interested    </button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Alberta
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/t3.png" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">NW 18 21 10W , Alonsa, MB, R0H</h6>
            <p class="card-text font-weight-bold"> $2,000 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Guillaume De Billy</h4>
    <p class="card-text"><h5>Description</h5><br><h6>The Town house is located in Bouchette. It has 2 bedrooms and 2 bathrooms. The living rooms is built in with a fully decked fire place.</p><p> There is easy access to public transportation and the supermarket is just minutes away from the house.</p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Guillaume De Billy" data-recipient="Mrs. Khaleesi Lutz">I'm Interested </button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Manitoba
</div>
</div>
</div>



<!-- Rooms -->
<div class="list-group">
 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/r1.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">15 De Cookshire , Cookshire Eaton, QC, J0B</h6>
            <p class="card-text font-weight-bold"> $900 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Joelle Lortie</h4>
    <p class="card-text"><h5>Description</h5><br><h6>This is a very spacious room in a large 4 bedroom townhouse. it comes with a attached bathroom. </p><p> the living room and the kitchen are shared with three other people residing in the house.</p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Joelle Lortie" data-recipient="Mr.Wayne Osterhout">I'm Interested </button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Quebec
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/r2.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">9728 109 St Westlock AB T7P 1P9</h6>
            <p class="card-text font-weight-bold"> $1200 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">William Bremner</h4>
    <p class="card-text"><h5>Description</h5><br><h6>The room is part of a 2 bedroom 1 bathroom apartment. It is shared with one other working professional.</p><p> The location of the house is very conviently situated near Grimsley College and is perfect for current students of the College.</p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="William Bremner" data-recipient="Mr. Margaret Hinkle">I'm Interested </button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Alberta
</div>
</div>

 <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
      <div class="card card-component" style="width: 18rem;">
        <img class="card-img-top img-size" src="images/r3.jpg" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title">899 Stone Church Rd E 14 Hamilton ON L8W 1B2</h6>
            <p class="card-text font-weight-bold"> $700 </p>
            <!--a href="#" class="btn btn-primary">Go somewhere</a-->
        </div>
    </div>
</div>
<div class="card-block px-2">
    <h4 class="card-title">Gerry Jober</h4>
    <p class="card-text"><h5>Description</h5><br><h6>The room is sittuated on the 13th floor of the apartment building. it have a balcony with a graat view.</p><p> the common areas are shared with 2 other people and the rent is inclusive of all expenses.</p></h6>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="Gerry Jober" data-recipient="Mr. David Smith">I'm Interested </button>
</div>
<div class="w-100"></div>
<div class="card-footer w-100 text-muted">
    Ontario
</div>
</div>
</div>




</div>
</div>
</div>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control validate" id="message-text">I'm Interested</textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="submitButton">Send message</button>
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
    <script src="js/modaljs.js"></script>
</body>
</html>