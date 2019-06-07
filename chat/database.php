<?php
//connect to mysql
$con = mysqli_connect("localhost","root","320270","lets");

//test fann_get_total_connections
if (mysqli_connect_errno()) {
  echo "Faild to connect.. ".$mysqli_connect_error();
  // code...
}
