<?php
$con = mysqli_connect("localhost","root","","rubik");
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	mysqli_set_charset($con,"utf8");

// $con = mysqli_connect("sql100.epizy.com","epiz_32468416","2XQdjuExJWgOl","epiz_32468416_rubik");
// if (mysqli_connect_errno()){
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
// 	mysqli_set_charset($con,"utf8");
?>