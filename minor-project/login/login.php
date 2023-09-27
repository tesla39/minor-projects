<?php

session_start();
include '../homepage/connection.php';
if (isset($_POST['submit'])) 
 {
  
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype =$_POST['usertype'];

 //for admin
    if($username=="mahesh" && $password=="tesla123")
{
    header("location:../admin/dashboard.php");
}
  
else
{

//for dealers

    if ($usertype=="Dealer")
    {
        $sql = "SELECT * FROM dealer WHERE dealer_name = '$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

    if ($password === $user['dealer_password']) {
        $_SESSION['username'] = $username;
        $_SESSION['ID'] = $user['dealer_id'];
        header("location:../homepage/loggedin.php");
    }
     else 
    {
        echo "Invalid password.";
    }  

    }
    else 
        echo "User not found.";
    } 
   
   //for customer 
   
   if ($usertype=="Customer")
   {
       $sql = "SELECT * FROM customer WHERE customer_name = '$username'";

   $result = $conn->query($sql);

   if ($result->num_rows > 0) {

       $user = $result->fetch_assoc();

   if ($password === $user['customer_password']) {
       $_SESSION['username'] = $username;
       $_SESSION['ID'] = $user['customer_id'];
       header("location:../homepage/loggedin.php");
   }
    else 
   {
       echo "Invalid password.";
   }  

   }
   else 
       echo "User not found.";
   } 

   //for vendors

   if ($usertype=="Vendor")
   {
       $sql = "SELECT * FROM vendor WHERE vendor_name = '$username'";

   $result = $conn->query($sql);

   if ($result->num_rows > 0) {

       $user = $result->fetch_assoc();

   if ($password === $user['vendor_password']) {
       $_SESSION['username'] = $username;
       $_SESSION['ID'] = $user['vendor_ID'];
       header("location:../homepage/loggedin.php");
   }
    else 
   {
       echo "Invalid password.";
   }  

   }
   else 
       echo "User not found.";
   } 

   //for farmers

   if ($usertype=="Farm-Owner")
   {
       $sql = "SELECT * FROM  farmer WHERE farmer_name = '$username'";

   $result = $conn->query($sql);

   if ($result->num_rows > 0) {

       $user = $result->fetch_assoc();

   if ($password === $user['farmer_password']) {
       $_SESSION['username'] = $username;
       $_SESSION['ID'] = $user['farmer_id'];
       header("location:../homepage/loggedin.php");
   }
    else 
   {
       echo "Invalid password.";
   }  

   }
   else 
       echo "User not found.";
   } 

}
}
// Close the database connection
$conn->close();
?>