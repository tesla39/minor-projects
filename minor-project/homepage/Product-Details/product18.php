<?php
include("../connection.php");
session_start();
$productID = 19; 
$_SESSION['PID'] =19;
$sql = "SELECT pimage, pname, discount, price, netprice, description FROM product WHERE PID = $productID";
$result = mysqli_query($conn, $sql);

if ($result) {
    $productData = mysqli_fetch_assoc($result);

    if ($productData) {
        $productImage = $productData['pimage'];
        $_SESSION['pimage'] =$productImage;
        $productName = $productData['pname'];
        $productDiscount = $productData['discount'];
        $productPrice = $productData['price'];
        $productNetPrice = $productData['netprice'];
        $productDescription = $productData['description'];


    } else {
        echo 'Product not found.';
    }

    mysqli_free_result($result); // Free the result set
} else {
    echo 'Error executing the query: ' . mysqli_error($conn);
}

// Remember to close the database connection if you're done with it
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Product Details</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="images">
                <div class="img-holder active">
                <img src="../product/<?php echo $productImage;?>"/>
                </div>
                <div class="img-holder">
                <img src="../product/<?php echo $productImage;?>"/>
                </div>
                <div class="img-holder">
                <img src="../product/<?php echo $productImage;?>"/>
                </div>
                <div class="img-holder">
                <img src="../product/<?php echo $productImage;?>"/>
                </div>
            </div>
            <div class="basic-info">
                <h1><?php echo $productName ; ?></h1>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <span>Rs.<?php echo $productNetPrice; ?></span>
               <s> Rs.<?php echo $productPrice ?></S> <?php echo "Discount=".$productDiscount."%";?> 
                <div class="options">
                    <a href="../../payment/">Buy It Now</a>
                    <a href="../../cart/">Add to Cart</a>   

                </div>
            </div>
           
            <div class="description">
                <p><?php echo $productDescription ?></p>
                <ul class="features">
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                </ul>
                <ul class="social">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

  
    <script>
     
</script>
</body>
</html>