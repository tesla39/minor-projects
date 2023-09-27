<?php
include('../homepage/connection.php');
session_start();

//taking session values from product page and login page

$id = $_SESSION['ID'];
$PID= $_SESSION['PID'];


if(empty($id)) {
  echo "<script type='text/javascript'>alert('Login to add items to cart'); window.location.href='../login/log-sign.html';</script>";
  die();
}

else
{
  $query = "INSERT INTO cart (product_id, user_id) VALUES ('$PID', '$id')";
  if(mysqli_query($conn,$query))
    {
        echo"added";
    }
   else
    {
      echo" Not added";
    }
}


?>