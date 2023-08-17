<?php

$con=mysqli_connect("localhost","root","","greengrocer");
if(!$con)
{
  echo"Connection failure";
}
$id=$_POST['product_id'];
$new_id=$_POST['new_id'];
$name=$_POST['product_name'];
$newname=$_POST['newname'];
$image=$_FILES['product_image'];
$description=$_POST['product_description'];
$price=$_POST['price'];
$netprice=$_POST['netprice'];
$discount=$_POST['discount'];
$stock=$_POST['stock'];


$target_path = "../homepage/product/";
$target_path = $target_path.basename( $image['name']); 

if(isset($_POST['btnInsert']))
 {
  if(move_uploaded_file($image['tmp_name'], $target_path))
  {
   $file=basename( $image['name']);
   $insSql="insert into product values('$new_id','$newname','$file','$description','$price','$discount','$netprice','$stock')";
   
  if(mysqli_query($con,$insSql))
    {
        echo"1 record inserted";
    }
   else
    {
      echo" Not inserted";
    }
 }
}

 else if(isset($_POST['btnModify']))
 {
  if(move_uploaded_file($image['tmp_name'], $target_path))
  {
  $file=basename( $image['name']);

   $modSql="update product set PID='$new_id',pname='$newname',pimage='$file',description='$description',price='$price',netprice='$netprice', discount='$discount',stock='$stock' where pname='$name'";
   
  if(mysqli_query($con,$modSql))
    {
        echo"Record Updated";
    }
   else
    {
      echo" Not Updated";
    }
 }
}
/*

else if(isset($_POST['btnModify']))
 {
   $modSql="update product set pimage='$image',description='$description',price='$price',netprice='$netprice', discount='$discount',stock='$stock' where pname='$name'";
   
  if(mysqli_query($con,$modSql))
    {
        echo"Record Updated";
    }
   else
    {
      echo" Not Updated";
    }
 }

 */
else if(isset($_POST['btndel']))
 {
    
   $delSql="Delete from product where PID='$new_id'";
   
  if(mysqli_query($con,$delSql))
    {
        echo"Record Deleted";
    }
   else
    {
      echo" Not Deleted";
    }
 }

 elseif (isset($_POST['btnShow'])) {
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Product ID</th>";
    echo "<th>Product name</th>";
    echo "<th>Product image</th>";
    echo "<th>Description</th>";
    echo "<th>Actual Price</th>";
    echo "<th>Net Price</th>";
    echo "<th>Discount</th>";
    echo "<th>Stock</th>";
    echo "</tr>";

    $sql = "SELECT * FROM product";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["PID"] . "</td>";
            echo "<td>" . $row["pname"] . "</td>";
            echo "<td>" . $row["pimage"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["netprice"] . "</td>";
            echo "<td>" . $row["discount"] . "</td>";
            echo "<td>" . $row["stock"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>