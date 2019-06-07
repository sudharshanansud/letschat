<?php
include 'database.php';
session_start(); 
//check if form submit
if ($_POST['submit']) {
  // code...
 // $user=mysqli_real_escape_string($con, $_POST['user']);
    $message=mysqli_real_escape_string($con, $_POST['message']);
  $Name=$_SESSION['username'];
  //set time DateTimeZone
  date_default_timeZone_set('New_Delhi');
  
  $time = date('h:i:s a',time());

  //validate
  if (!isset($message) || $message == '') {
  $error = "Please enter your message";
  header("Location: index.php?error=".urlencode($error));
  exit();
  }else {
  $query= "INSERT INTO shouts(user,message,time) VALUES ('$Name','$message','$time') ";

  if (!mysqli_query($con, $query)) {
    die('Error:'.mysqli_error($con));
  }else {
    header("Location: index.php");
    exit();
  }
  }
}
