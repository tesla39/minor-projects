<?php

$con=mysqli_connect("localhost","root","","greengrocer");
if(!$con)
{
  echo"Connection failure";
}

$new_name=$_POST['newname'];
$name=$_POST['Banner_name'];
$image=$_FILES['Banner_image'];
$description=$_POST['Banner_description'];


$target_path = "../homepage/product/";
$target_path = $target_path.basename( $image['name']); 

if(isset($_POST['btnInsert']))
 {


if(move_uploaded_file($image['tmp_name'], $target_path))
{
  $file=basename( $image['name']);
  $query="insert into banner values('$new_name','$file','$description')";
  if(mysqli_query($con,$query))
  {
      echo"1 record inserted";
  }
 else
  {
    echo" Not inserted";
  }
}
 }
/*
   $insSql="insert into banner values('$name','$image','$description')";
   
  if(mysqli_query($con,$insSql))
    {
        echo"1 record inserted";
    }
   else
    {
      echo" Not inserted";
    }
 }
 */
else if(isset($_POST['btnModify']))
 {
  if(move_uploaded_file($image['tmp_name'], $target_path))
  {
  $file=basename( $image['name']);
 // $query="insert into banner values('$name','$file','$description')";
 
   $modSql="update banner set Name='$new_name',Image='$file',Description='$description' where Name='$name'";
   
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
else if(isset($_POST['btndel']))
 {
    
   $delSql="Delete from banner where Name='$name'";
   
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
    echo "<th>banner name</th>";
    echo "<th>banner image</th>";
    echo "<th>Description</th>";
    echo "</tr>";

    $sql = "SELECT * FROM banner";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Image"] . "</td>";
            echo "<td>" . $row["Description"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>