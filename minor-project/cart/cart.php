<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>
  <body>
  <h2>Your Cart</h2>
<table class="cart-table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>
    </thead>
    <tbody>

    <?php
include('../homepage/connection.php');
session_start();

// taking session value from login page
$id = $_SESSION['ID'];
$sum=0;
// fetch all products added to the cart by the user
$query = "SELECT * FROM cart WHERE user_id='$id'";
$cartItems = $conn->query($query);

if ($cartItems->num_rows > 0) {
    while ($item = $cartItems->fetch_assoc()) {
        $PID = $item['product_id'];

        // fetch product details
        $productQuery = "SELECT * FROM product WHERE PID='$PID'";
        $productResult = $conn->query($productQuery);
        if ($productResult->num_rows > 0) {
            while ($product = $productResult->fetch_assoc()) {
                $pname = $product['pname'];
                $price = $product['netprice'];
                $pimage = $product['pimage'];
                
                $sum=$sum+$price; 
?>
 <tr>
  
 <td>
  <div class="product-details">
    <div class="remove-link">
      <a href="remove_item.php?PID=<?php echo $PID; ?>">
        <i class="fa-solid fa-trash"></i>
      </a> 
    </div>
    <div class="product-img-link">
      <a href="view_details.php?PID=<?php echo $PID; ?>">
        <img src='../homepage/product/<?php echo $pimage; ?>' alt='product' width='50' height='50'>
      </a>
    </div>
    <div class="product-name-link">
      <a href="view_details.php?PID=<?php echo $PID; ?>">
        <?php echo $pname ?>
      </a>
    </div>
  </div>
</td>

 <td>Rs.<?php echo $price; ?></td>
</tr>
           
<?php
            }
        }

    }
}
?> 
    </tbody>
    <tfoot>
        <tr>
            <!-- You will need to calculate total price and echo it here -->
            <td></td>
            <td>Total: Rs.<?php echo $sum ?></td>
        </tr>
    </tfoot>
</table>

</body>
</html>