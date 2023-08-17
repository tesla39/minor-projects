<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="topnav.css">
  <title>HOMEPAGE</title>
  <link rel="stylesheet" href="footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
 <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="productslide.css">
</head>
<body>

 <div class="navbar">
  <a href="#" class="brand">GREEN GROCERS EXCHANGE</a>
  <form class="search-form">
    <input type="text" placeholder="Search" id="search-input" name="search" class="search-input">
  </form>
  <ul class="navbar-menu">
  <ul class="navbar-menu">
    
  <li onclick="showAlert()" style="color: white; cursor: pointer;">
    <i class="fa-sharp fa-solid fa-cart-shopping" style="color:white;"></i>Cart
</li>

    <li><a href="../validation/log-sign.html"><i class="fa-sharp fa-solid fa-right-to-bracket"></i> Login</a></li>
  </ul>
  </ul>
</div>
  <!--navbar 2-->

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../farmer/">Farmers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../dealer/">Dealer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../vendors/">Vendors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../admin/sendemail/">feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="notice4client.php">notice for client</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <?php
$sql="SELECT Image from banner";
 if($row=mysqli_query($conn,$sql))
  {
    $i=0;
  while($rowval = mysqli_fetch_array($row))
    {
      $path=$rowval['Image'];
      $array[$i]=$path;
      $i++;
    }
  } 
?>

<div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./product/<?php echo $array[0];?>" height="415px" width="818px"class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./product/<?php echo $array[1];?>" height="450px" width="600px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./product/<?php echo $array[2];?>" height="450px" width="600px" class="d-block w-100" alt="...">
       </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>
  

  <?php
  //product image
$sql="SELECT pimage from product";
 if($row=mysqli_query($conn,$sql))
  {
    $i=0;
  while($rowval = mysqli_fetch_array($row))
    {
      $image[$i]=$rowval['pimage'];
      $i++;
    }
  } 

  //product name
  $sql="SELECT pname from product";
 if($row=mysqli_query($conn,$sql))
  {
    $i=0;
  while($rowval = mysqli_fetch_array($row))
    {
      $name[$i]=$rowval['pname'];
      $i++;
    }
  }

  //product discount
  $sql="SELECT discount from product";
 if($row=mysqli_query($conn,$sql))
  {
    $i=0;
  while($rowval = mysqli_fetch_array($row))
    {
      $discount[$i]=$rowval['discount'];
      $i++;
    }
  }

  //product price
  $sql="SELECT price from product";
  if($row=mysqli_query($conn,$sql))
   {
     $i=0;
   while($rowval = mysqli_fetch_array($row))
     {
       $price[$i]=$rowval['price'];
       $i++;
     }
   }

    //product price
  $sql="SELECT netprice from product";
  if($row=mysqli_query($conn,$sql))
   {
     $i=0;
   while($rowval = mysqli_fetch_array($row))
     {
       $netprice[$i]=$rowval['netprice'];
       $i++;
     }
   }

   //product description
   $sql="SELECT description from product";
   if($row=mysqli_query($conn,$sql))
    {
      $i=0;
    while($rowval = mysqli_fetch_array($row))
      {
        $description[$i]=$rowval['description'];
        $i++;
      }
    }
?>
   <!-- product slide 1-->
   <div id="product-parent">
  <section class="product"> 
   <!--<ul id="data-list">--> 
    <h2 class="product-category">Best Selling </h2>
    <button class="pre-btn"><img src="../product/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="../product/arrow.png" alt=""></button>
    <div class="product-container">
   
    <?php 
        for ($i = 0; $i < 7; $i++) {
          $image[$i];
          $name[$i];
          $netprice[$i];
?>
    
<li>
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag"><?php echo $discount[$i]; ?>% off</span>
            <img src="./product/<?php echo $image[$i]; ?>" class="product-thumb" alt="">
            <a href="Product-Details/product<?php echo $i ?>.php"><button class="card-btn">Learn more</button></a>
        </div>
        <div class="product-info">
            <h2 class="product-brand"><?php echo $name[$i]; ?></h2>
            <p class="product-short-description"><?php echo $description[$i];?></p>
            <span class="price">Rs.<?php echo $netprice[$i];?></span><span class="actual-price">Rs.<?php echo $price[$i];?></span>
        </div>
    </div>
</li>
<?php 
        
    } 
?>
    </div>
  </div>
</section>


<!--product slide 2-->
<div id="product-parent">
  <section class="product"> 
   <!--<ul id="data-list">--> 
    <h2 class="product-category">Best Selling </h2>
    <button class="pre-btn"><img src="../product/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="../product/arrow.png" alt=""></button>
    <div class="product-container">
   
    <?php 
        for ($i = 7; $i < 14; $i++) {
          $image[$i];
          $name[$i];
          $netprice[$i];
?>
    
<li>
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag"><?php echo $discount[$i]; ?>% off</span>
            <img src="./product/<?php echo $image[$i]; ?>" class="product-thumb" alt="">
            <a href="Product-Details/product<?php echo $i ?>.php"><button class="card-btn">Learn more</button></a>
        </div>
        <div class="product-info">
            <h2 class="product-brand"><?php echo $name[$i]; ?></h2>
            <p class="product-short-description"><?php echo $description[$i];?></p>
            <span class="price">Rs.<?php echo $netprice[$i];?></span><span class="actual-price">Rs.<?php echo $price[$i];?></span>
        </div>
    </div>
</li>
<?php 
        
    } 
?>
    </div>
  </div>
</section>

<!--product slide 3-->
<div id="product-parent">
  <section class="product"> 
   <!--<ul id="data-list">--> 
    <h2 class="product-category">Best Selling </h2>
    <button class="pre-btn"><img src="../product/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="../product/arrow.png" alt=""></button>
    <div class="product-container">
   
    <?php 
        for ($i = 14; $i <21; $i++) {
          $image[$i];
          $name[$i];
          $netprice[$i];
?>
    
<li>
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag"><?php echo $discount[$i]; ?>% off</span>
            <img src="./product/<?php echo $image[$i]; ?>" class="product-thumb" alt="">
            <a href="Product-Details/product<?php echo $i ?>.php"><button class="card-btn">Learn more</button></a>
        </div>
        <div class="product-info">
            <h2 class="product-brand"><?php echo $name[$i]; ?></h2>
            <p class="product-short-description"><?php echo $description[$i];?></p>
            <span class="price">Rs.<?php echo $netprice[$i];?></span><span class="actual-price">Rs.<?php echo $price[$i];?></span>
        </div>
    </div>
</li>
<?php 
        
    } 
?>
    </div>
  </div>
</section>
</div>
  
<!--footer code-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col" id="company">

        <!--image customization-->
       
        <img src="./product/logo1.jpg" alt="" class="logo">
        
        <p>
          We are creating a seamless and reliable network between local farmers, suppliers, and consumers, ensuring a 
          consistent supply of fresh and high-quality fruits and vegetables. 
        </p>
         
        <div class="social">
          <a href="https://www.facebook.com/nischal.baraili.7"><i class="fab fa-facebook"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>


      <div class="col" id="services">
         <h3>Products</h3>
         <div class="links">
          <a href="#">Fresh and organic vegetables/fruits</a>
          <a href="#">Wholesale supplier</a> 
          <a href="#">Seasonal produce</a> 
          <a href="#">Sustainable farming</a>
         </div>
      </div>

      <div class="col" id="useful-links">
         <h3>Links</h3>
         <div class="links">
          <a href="about/about.html">About Us</a>
          <a href="#">Products</a>
          <a href="#">Our Policy</a>
          <a href="#">Help</a>
         </div>
      </div>

      <div class="col" id="contact">
        <h3>Contact</h3>
        <div class="contact-details">
           <i class="fa fa-location"></i>
           <p> 45800,  Sarlahi, <br> Madhesh pradesh, NEPAL</p>
        </div>
        <div class="contact-details">
           <i class="fa fa-phone"></i>
           <p>+9779804895494</p>
        </div>
      </div>
    </div>
    
    </div>
  </div>
  <div class="footer-copyright">
  <p>&copy; 2023 Nischal's Supplier. All Rights Reserved.</p>
  </div>
  </footer>
  <script src="SEARCH.js"></script>
<script src="product_slide.js"></script>
<script>
    function showAlert() {
        alert("Login to visit cart");
    }
</script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>





