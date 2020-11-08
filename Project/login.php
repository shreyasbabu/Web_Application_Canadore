<?php
require_once("databaseclass.php");
$object = new Database();

$conn = $object->get_connection();
$flag = 0;

if(isset($_POST['submit']))
{
  if(isset($_POST['email']))
  {
     $email = $_POST['email']; 
   }
  if(isset($_POST['password']))
    { 
      $upassword = $_POST['password'];
      $upassword = sha1($upassword); 
    }

    $sql = "SELECT * FROM users WHERE (email = '$email' AND password='$upassword')";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
    mysqli_free_result($result);
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['active'] = 1;
    header("Location:profile.php");
    }
    else
    {
    $flag = 1;
    mysqli_free_result($result);
  }

}

$object->close_connection();
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>

    
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <?php
      if($flag == 1)
      {
        $flag = 0;
    ?>
      <div class = 'align form-message alert alert-danger alert-dismissible fade show' role='alert'><h4>Incorrect Email ID or Password</h4></div>
    <?php
      }
    ?>


    <form class="form-signin center" method="POST" action="<?=$_SERVER['PHP_SELF'];?>" enctype="multipart/formdata">
  <a href="Home Page.php"><img class="mb-4" src="images/logo.png" alt="" width="72" height="72"></a>
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; hstworld.com 2020</p>
</form>
</body>
</html>