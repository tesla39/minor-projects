<?php
include "../homepage/connection.php";
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if (isset($_POST['submit'])) {
    // Get the submitted form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype =$_POST['usertype'];
    $email = $_POST['email'];
    $confirm_password = $_POST['confirm_password'];

  
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }
      
    //for customer
    if($usertype=="Customer"){
    
        $sql = "SELECT * FROM customer WHERE customer_name = '$username'";

        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "Username already exists.";
        } else {
      
            $sql = "INSERT INTO customer (customer_name,customer_email,customer_password) VALUES ('$username','$email', '$password')";
    
            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>alert('Registered');</script>";
                echo "<script type='text/javascript'>alert('Registered'); window.location = 'log-sign.html';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

  
  //for dealer
 if ($usertype=="Dealer"){
    
        $sql = "SELECT * FROM dealer WHERE dealer_name = '$username'";

        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "Username already exists.";
        } else {
      
            $sql = "INSERT INTO dealer (dealer_name,dealer_email,dealer_password) VALUES ('$username','$email', '$password')";
    
            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>alert('Registered');</script>";
                echo "<script type='text/javascript'>alert('Registered'); window.location = 'log-sign.html';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }



    //for vendor
if($usertype=="Vendor"){
    
        $sql = "SELECT * FROM vendor WHERE vendor_name = '$username'";

        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "Username already exists.";
        } else {
      
            $sql = "INSERT INTO vendor (vendor_name,vendor_email,vendor_password) VALUES ('$username','$email', '$password')";
    
            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>alert('Registered');</script>";
                echo "<script type='text/javascript'>alert('Registered'); window.location = 'log-sign.html';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
 



//for farmer
if($usertype=="Farm-Owner"){
    
    $sql = "SELECT * FROM farmer WHERE farmer_name = '$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Username already exists.";
    } else {
  
        $sql = "INSERT INTO farmer (farmer_name,farmer_email,farmer_password) VALUES ('$username','$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'>alert('Registered');</script>";
            echo "<script type='text/javascript'>alert('Registered'); window.location = 'log-sign.html';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

}

$conn->close();
?>