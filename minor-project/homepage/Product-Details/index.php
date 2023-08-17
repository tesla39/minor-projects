<?php
include("../connection.php");
session_start();
echo 'Session ID: ' . session_id() . '<br>';

if (!isset($_GET['product'])) {
    die('Product index not passed in URL');
}

$productIndex = intval($_GET['product']);

if (!isset($_SESSION['productName']) || !is_array($_SESSION['productName'])) {
    die('productName session variable not set or not an array');
}

if (!isset($_SESSION['image']) || !is_array($_SESSION['image'])) {
    die('image session variable not set or not an array');
}

if (!isset($_SESSION['price']) || !is_array($_SESSION['price'])) {
    die('price session variable not set or not an array');
}

if (!isset($_SESSION['productName'][$productIndex]) || !isset($_SESSION['image'][$productIndex]) || !isset($_SESSION['price'][$productIndex])) {
    die('Invalid product index');
}

$name = $_SESSION['productName'][$productIndex];
$image = $_SESSION['image'][$productIndex];
$price = $_SESSION['price'][$productIndex];
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
                <img src="../product/<?php echo $image;?>"/>
                </div>
                <div class="img-holder">
                <img src="../product/<?php echo $image;?>"/>
                </div>
                <div class="img-holder">
                <img src="../product/<?php echo $image;?>"/>
                </div>
                <div class="img-holder">
                <img src="../product/<?php echo $image;?>"/>
                </div>
            </div>
            <div class="basic-info">
                <h1><?php echo $name; ?></h1>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <span><?php echo $price; ?></span>
                <div class="options">
                    <a href="#">Buy It Now</a>
                    <a href="#">Add to Cart</a>
                </div>
            </div>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus temporibus corporis repudiandae, consectetur nostrum nisi commodi placeat rerum molestias numquam nihil accusantium deleniti! Enim, nesciunt a quis amet hic officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nemo accusantium tempora facere doloremque cum iusto, ut neque, fuga omnis libero laborum ullam. At dolorum qui atque labore illo dignissimos.</p>
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
</body>
</html>