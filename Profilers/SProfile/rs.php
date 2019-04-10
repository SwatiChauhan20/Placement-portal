<?php
session_start();
include("db.php");
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
   mysqli_select_db($connect,"placement") or die("Cant Connect to database"); // Selecting Database from Server
  $email = $_POST['email'];
  $USN = $_POST['USN'];
  $check = mysqli_query('$connect',"SELECT * FROM registereduser WHERE email='".$email."'") or die("Check Query");
 if(mysqli_num_rows($check) != 0) 
 {
	 $row = mysqli_fetch_assoc($check);
	 $dbQuestion = $row['Question'];
	 $dbAnswer = $row['Answer'];
  if($fullname == $fullname && $dbAnswer==$Answer) 
  {
     $_SESSION['reset'] = $USN;
	   header("location: Reset password.php");
	   
  }
  else 
	  echo "<center>Failed! Incorrect Credentials</center>";
 } else
 echo "<center> Enter Something Correctly Champ!!! </center>";
?>