<?php
include('../homepage/connection.php');
session_start();

//taking session values from product page and login page

$id = $_SESSION['ID'];
$PID= $_SESSION['PID'];
$pimage=$_SESSION['pimage'];


$query="insert into cart values('$PID','$pimage','$id')";
if(mysqli_query($conn,$query))
  {
      echo"added";
  }
 else
  {
    echo" Not added";
  }
?>