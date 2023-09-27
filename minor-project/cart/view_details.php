<?php
 
$PID = intval($_GET['PID']); // Get the product ID from the URL and ensure it's an integer
$PID=$PID-1;
$url = "../homepage/Product-Details/product" . urlencode($PID) . ".php";
// Ensure no output has been sent before header
ob_start();
header("Location: $url");
ob_end_flush();// Get the product ID from the URL

?>