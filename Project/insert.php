<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hstworld";

if (isset($_POST)) {
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$uusername = $_POST['UserName'];
$email = $_POST['Email'];
$phone = $_POST['PhoneNumber'];
$upassword = $_POST['Password'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
 

if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO `users` (`first_name`, `last_name`, `username`, `email`, `password`, `phone`) 
VALUES ('$firstname', '$lastname', '$uusername', '$email','$upassword','$phone')";
/*$sql = "INSERT INTO `signin`(`FirstName`, `LastName`, `UserName`, `Email`, `PhoneNumber`, `Password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])";*/
}
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 
// Close connection
mysqli_close($conn);
?>