<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hstworld";
$flag = 0;

if (isset($_POST)) {
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$uusername = $_POST['UserName'];
$email = $_POST['Email'];
$phone = $_POST['PhoneNumber'];
$upassword = $_POST['Password'];

$upassword = sha1($upassword);
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


 if(!UserExists($conn,$uusername))
 {
 	$sql = "INSERT INTO `users` (`first_name`, `last_name`, `username`, `email`, `password`, `phone`) 
	VALUES ('$firstname', '$lastname', '$uusername', '$email','$upassword','$phone')";
/*$sql = "INSERT INTO `signin`(`FirstName`, `LastName`, `UserName`, `Email`, `PhoneNumber`, `Password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])";*/
	if(mysqli_query($conn, $sql))
	{
    $flag = 0;
	} 
	else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
 }
 else
 {
     $flag = 1;
 }
}
	
function UserExists($conn,$user)
{
	$usql = "SELECT username FROM users where username = '$user'";
	$result = mysqli_query($conn,$usql);
	if(mysqli_num_rows($result) > 0)
	{
		return TRUE;
		mysqli_free_result($result);
		
	}
	else
	{
		return FALSE;
		mysqli_free_result($result);
	}
}

// Close connection
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>HSTWorld</title>
  </head>
  <body>

  	<?php
  	if($flag == 0){
  		?>
  		<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<h1>Registered Sucessfully</h1>
  			

  		</div>
  		<?php
  	}
  	?>
  	<?php 


  	if($flag == 1){
  		?>
  		<div class="alert alert-warning alert-dismissible fade show" role="alert">
  			<h1>User Already Exists</h1>
  			<button class="button" onclick="location.href='signup.html'">Go Back to Sign Up</button>
  		</div>
  		<?php
  	}
  	?>

  	<?php
  	require_once("login.php");
  	?>

	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
