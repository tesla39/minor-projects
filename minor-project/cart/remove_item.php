<?php

include('../homepage/connection.php');
$PID = $_GET['PID']; // Get the product ID from the URL
$query = "DELETE FROM cart WHERE product_id=$PID";

if(mysqli_query($conn,$query))
  {
      echo "REMOVED";
  }
 else
  {
    echo "Not REMOVED";
  }
exit();
?>