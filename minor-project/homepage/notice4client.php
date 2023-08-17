

<!doctype html>
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

<body onLoad="myName()">
  
 <div class="navbar">
  <a href="../homepage/index.php" class="brand">GREEN GROCERS EXCHANGE</a>
  <form class="search-form">
    <input type="text" placeholder="Search" id="search-input" name="search" class="search-input">
  </form>
  <ul class="navbar-menu">
  <ul class="navbar-menu">
    <li><i class="fa-sharp fa-solid fa-cart-shopping"></i>Cart</li>
    <li><a href="log-sign.html"><i class="fa-sharp fa-solid fa-right-to-bracket"></i> Login</a></li>
  </ul>
        </ul>
</div>
  <!--navbar 2-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="second-nav">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Suppliers
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vendors
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Farms
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Offers
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="notice4client.php">notice for client</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
   
                <?php
                            $con = mysqli_connect("localhost", "root", "","greengrocer") or die("Could not connect");

                              $result=mysqli_query($con,"SELECT * FROM notice ");
 
                                print "<table width='95%' border='5'  cellpadding='0'>";
                                print "<tr>

                               <td align='center'>HEADING</td>
                               <td align='center'>DATE</td>
                               <td align='center'>NOTICE</td>
                               </tr>";
                               echo "<br>";
                               echo "<br>";
                               echo "<br>";

                              while($res = mysqli_fetch_array($result))
                                    {
	                              print "<tr ><td colspan='2'><hr   style='height:2px;'/> </td></tr>";
	                                  // print "<tr >";
	
                                 //  print "<td align='center' style='color:red; background-color:silver;'><font size=5>"." $res[0]</font></td>";
                                 print "\t<td align='center' style='color:black; background-color:silver;'><font size=6> $res[0]"." </font></td>";
                               print "<td align='center' style='color:blue; background-color:silver;'><font size=5>"." $res[1]</font></td>";
                              print "<td align='center' style='color:red; background-color:silver;'><font size=5><a href="."uploads/notice/"."$res[2]"." target='_blank'>"."Download</a> </font></td>\n";

                              print "</tr>";
 
                           }
                          print "</table>\n";
                          echo "<br>";
                          echo "<br>";
                          echo "<br>";
                          mysqli_close($con);
 
                          ?>
                         
                          <!--footer code-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col" id="company">

        <!--image customization-->
       
        <img src="../product/logo1.jpg" alt="" class="logo">
        
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
    <br> <br>
    </div>
  </div>
  <div class="footer-copyright">
  <p>&copy; 2023 Nischal's Supplier. All Rights Reserved.</p>
  </div>
  </footer
               
               <script src="product_slide.js"></script>
 
 </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


