<?php
include('../homepage/connection.php');
session_start();

//taking session values from product page and login page

$id = $_SESSION['ID'];
$PID= $_SESSION['PID'];
$pimage=$_SESSION['pimage'];

//$query="select pimage from cart where PID='$PID' AND user_id='$id'";
$query="select pimage from product where PID='$PID'";

if(mysqli_query($conn,$query))
  {
      echo"DONE";
     
      echo "<img src='../homepage/product/$pimage' alt='product'>";
  }
 else
  {
    echo" Not DONE";
  }
?>