<?php
session_start(); 
unset($_SESSION['email']);
unset($_SESSION['active']);

//Destroy entire session
session_destroy();

//Redirect to homepage
header("Location:login.php");
?>